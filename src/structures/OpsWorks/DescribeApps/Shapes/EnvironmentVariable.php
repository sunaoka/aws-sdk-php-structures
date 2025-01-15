<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property bool|null $Secure
 */
class EnvironmentVariable extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string,
     *     Secure?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
