<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property string $CodeSha256
 * @property int $CodeSize
 * @property string $SigningProfileVersionArn
 * @property string $SigningJobArn
 */
class LayerVersionContentOutput extends Shape
{
    /**
     * @param array{
     *     Location?: string,
     *     CodeSha256?: string,
     *     CodeSize?: int,
     *     SigningProfileVersionArn?: string,
     *     SigningJobArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
