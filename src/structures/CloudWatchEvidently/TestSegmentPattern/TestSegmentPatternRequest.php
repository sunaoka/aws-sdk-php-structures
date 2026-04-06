<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\TestSegmentPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pattern
 * @property string $payload
 */
class TestSegmentPatternRequest extends Request
{
    /**
     * @param array{
     *     pattern: string,
     *     payload: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
