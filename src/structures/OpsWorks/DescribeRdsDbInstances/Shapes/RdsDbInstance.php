<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRdsDbInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RdsDbInstanceArn
 * @property string $DbInstanceIdentifier
 * @property string $DbUser
 * @property string $DbPassword
 * @property string $Region
 * @property string $Address
 * @property string $Engine
 * @property string $StackId
 * @property bool $MissingOnRds
 */
class RdsDbInstance extends Shape
{
    /**
     * @param array{
     *     RdsDbInstanceArn?: string,
     *     DbInstanceIdentifier?: string,
     *     DbUser?: string,
     *     DbPassword?: string,
     *     Region?: string,
     *     Address?: string,
     *     Engine?: string,
     *     StackId?: string,
     *     MissingOnRds?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
