<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageName
 * @property int $ImageVersionNumber
 * @property string $AppImageConfigName
 */
class CustomImage extends Shape
{
    /**
     * @param array{
     *     ImageName: string,
     *     ImageVersionNumber?: int,
     *     AppImageConfigName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
