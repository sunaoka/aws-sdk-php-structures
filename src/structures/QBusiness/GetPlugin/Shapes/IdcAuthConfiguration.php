<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $idcApplicationArn
 * @property string $roleArn
 */
class IdcAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     idcApplicationArn: string,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
