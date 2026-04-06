<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceS3DirectoryPath
 * @property string|null $transformEntryPointScript
 */
class CustomModelTransformParameters extends Shape
{
    /**
     * @param array{
     *     sourceS3DirectoryPath: string,
     *     transformEntryPointScript?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
