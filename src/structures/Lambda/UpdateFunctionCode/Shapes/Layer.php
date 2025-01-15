<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property int|null $CodeSize
 * @property string|null $SigningProfileVersionArn
 * @property string|null $SigningJobArn
 */
class Layer extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
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
