<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $firstSeen
 * @property \Aws\Api\DateTimeResult|null $lastSeen
 * @property list<string>|null $targets
 * @property list<string>|null $ttps
 */
class AtigData extends Shape
{
    /**
     * @param array{
     *     firstSeen?: \Aws\Api\DateTimeResult|null,
     *     lastSeen?: \Aws\Api\DateTimeResult|null,
     *     targets?: list<string>|null,
     *     ttps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
