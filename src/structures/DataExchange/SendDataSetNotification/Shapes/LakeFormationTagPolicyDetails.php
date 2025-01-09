<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Database
 * @property string $Table
 */
class LakeFormationTagPolicyDetails extends Shape
{
    /**
     * @param array{
     *     Database?: string,
     *     Table?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
