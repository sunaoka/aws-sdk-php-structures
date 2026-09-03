<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Operation
 * @property string|null $Service
 * @property string|null $Error
 * @property string|null $UserAgent
 */
class ApiCall extends Shape
{
    /**
     * @param array{
     *     Operation?: string|null,
     *     Service?: string|null,
     *     Error?: string|null,
     *     UserAgent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
