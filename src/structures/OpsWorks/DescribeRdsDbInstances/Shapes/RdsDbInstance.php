<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeRdsDbInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RdsDbInstanceArn
 * @property string|null $DbInstanceIdentifier
 * @property string|null $DbUser
 * @property string|null $DbPassword
 * @property string|null $Region
 * @property string|null $Address
 * @property string|null $Engine
 * @property string|null $StackId
 * @property bool|null $MissingOnRds
 */
class RdsDbInstance extends Shape
{
    /**
     * @param array{
     *     RdsDbInstanceArn?: string|null,
     *     DbInstanceIdentifier?: string|null,
     *     DbUser?: string|null,
     *     DbPassword?: string|null,
     *     Region?: string|null,
     *     Address?: string|null,
     *     Engine?: string|null,
     *     StackId?: string|null,
     *     MissingOnRds?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
