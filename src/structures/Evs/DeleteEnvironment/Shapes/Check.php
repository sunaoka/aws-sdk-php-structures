<?php

namespace Sunaoka\Aws\Structures\Evs\DeleteEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KEY_REUSE'|'KEY_COVERAGE'|'REACHABILITY'|'HOST_COUNT'|null $type
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $result
 * @property \Aws\Api\DateTimeResult|null $impairedSince
 */
class Check extends Shape
{
    /**
     * @param array{
     *     type?: 'KEY_REUSE'|'KEY_COVERAGE'|'REACHABILITY'|'HOST_COUNT'|null,
     *     result?: 'PASSED'|'FAILED'|'UNKNOWN'|null,
     *     impairedSince?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
