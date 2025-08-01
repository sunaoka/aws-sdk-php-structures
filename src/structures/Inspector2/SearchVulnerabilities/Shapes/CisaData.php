<?php

namespace Sunaoka\Aws\Structures\Inspector2\SearchVulnerabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $dateAdded
 * @property \Aws\Api\DateTimeResult|null $dateDue
 * @property string|null $action
 */
class CisaData extends Shape
{
    /**
     * @param array{
     *     dateAdded?: \Aws\Api\DateTimeResult|null,
     *     dateDue?: \Aws\Api\DateTimeResult|null,
     *     action?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
