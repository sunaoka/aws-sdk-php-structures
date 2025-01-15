<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CaptureTime
 * @property list<array<string, string>>|null $Content
 */
class OpsEntityItem extends Shape
{
    /**
     * @param array{
     *     CaptureTime?: string|null,
     *     Content?: list<array<string, string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
