<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $StreamName
 * @property 'MANUAL'|'AUTOMATIC' $NamingType
 */
class RtmpPushSourceSettings extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     StreamName: string,
     *     NamingType: 'MANUAL'|'AUTOMATIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
