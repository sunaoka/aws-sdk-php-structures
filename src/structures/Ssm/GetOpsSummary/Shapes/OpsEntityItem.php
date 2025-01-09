<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CaptureTime
 * @property list<array<string, string>> $Content
 */
class OpsEntityItem extends Shape
{
    /**
     * @param array{
     *     CaptureTime?: string,
     *     Content?: list<array<string, string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
