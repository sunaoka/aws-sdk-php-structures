<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property bool $Secure
 */
class EnvironmentVariable extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value: string,
     *     Secure?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
