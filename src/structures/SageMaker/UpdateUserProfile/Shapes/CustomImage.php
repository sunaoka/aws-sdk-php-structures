<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageName
 * @property int<0, max>|null $ImageVersionNumber
 * @property string $AppImageConfigName
 */
class CustomImage extends Shape
{
    /**
     * @param array{
     *     ImageName: string,
     *     ImageVersionNumber?: int<0, max>|null,
     *     AppImageConfigName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
