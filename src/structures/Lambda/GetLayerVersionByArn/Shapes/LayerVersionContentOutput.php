<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersionByArn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property string|null $CodeSha256
 * @property int|null $CodeSize
 * @property string|null $SigningProfileVersionArn
 * @property string|null $SigningJobArn
 */
class LayerVersionContentOutput extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     CodeSha256?: string|null,
     *     CodeSize?: int|null,
     *     SigningProfileVersionArn?: string|null,
     *     SigningJobArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
