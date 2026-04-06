<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Database
 * @property string|null $Table
 */
class LakeFormationTagPolicyDetails extends Shape
{
    /**
     * @param array{
     *     Database?: string|null,
     *     Table?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
