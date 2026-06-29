<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property string|null $CodeSha256
 * @property int|null $CodeSize
 * @property string|null $SigningProfileVersionArn
 * @property string|null $SigningJobArn
 * @property ResolvedS3Object|null $ResolvedS3Object
 */
class LayerVersionContentOutput extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     CodeSha256?: string|null,
     *     CodeSize?: int|null,
     *     SigningProfileVersionArn?: string|null,
     *     SigningJobArn?: string|null,
     *     ResolvedS3Object?: ResolvedS3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
