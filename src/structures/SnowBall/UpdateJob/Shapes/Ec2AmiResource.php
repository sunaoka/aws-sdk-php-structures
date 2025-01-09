<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmiId
 * @property string $SnowballAmiId
 */
class Ec2AmiResource extends Shape
{
    /**
     * @param array{
     *     AmiId: string,
     *     SnowballAmiId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
