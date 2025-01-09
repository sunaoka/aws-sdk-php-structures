<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $firstSeen
 * @property \Aws\Api\DateTimeResult $lastSeen
 * @property list<string> $targets
 * @property list<string> $ttps
 */
class AtigData extends Shape
{
    /**
     * @param array{
     *     firstSeen?: \Aws\Api\DateTimeResult,
     *     lastSeen?: \Aws\Api\DateTimeResult,
     *     targets?: list<string>,
     *     ttps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
