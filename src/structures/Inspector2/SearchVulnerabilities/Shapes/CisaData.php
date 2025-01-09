<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property \Aws\Api\DateTimeResult $dateAdded
 * @property \Aws\Api\DateTimeResult $dateDue
 */
class CisaData extends Shape
{
    /**
     * @param array{
     *     action?: string,
     *     dateAdded?: \Aws\Api\DateTimeResult,
     *     dateDue?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
