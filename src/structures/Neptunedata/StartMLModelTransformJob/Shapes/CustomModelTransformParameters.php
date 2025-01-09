<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceS3DirectoryPath
 * @property string $transformEntryPointScript
 */
class CustomModelTransformParameters extends Shape
{
    /**
     * @param array{
     *     sourceS3DirectoryPath: string,
     *     transformEntryPointScript?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
