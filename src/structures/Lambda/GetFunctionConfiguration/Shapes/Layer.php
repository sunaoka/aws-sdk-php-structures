<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int $CodeSize
 * @property string $SigningProfileVersionArn
 * @property string $SigningJobArn
 */
class Layer extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
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
