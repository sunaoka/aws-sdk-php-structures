<?php

namespace Sunaoka\Aws\Structures\SnowBall\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmiId
 * @property string|null $SnowballAmiId
 */
class Ec2AmiResource extends Shape
{
    /**
     * @param array{
     *     AmiId: string,
     *     SnowballAmiId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
