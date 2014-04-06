<?php

/*
 * This file is part of the Greppy package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Greppy;

/**
 * A basic regex matcher.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Greppy
 */
final class Matcher implements MatcherInterface
{
    /**
     * @var string
     */
    private $subject;

    /**
     * @param string $subject The subject to match against
     */
    public function __construct($subject)
    {
        $this->subject = $subject;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * {@inheritdoc}
     */
    public function matches(Pattern $pattern)
    {
        return (bool) preg_match((string) $pattern, $this->subject);
    }
}
 