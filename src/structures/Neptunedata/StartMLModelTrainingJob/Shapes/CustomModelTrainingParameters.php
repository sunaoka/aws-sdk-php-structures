<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceS3DirectoryPath
 * @property string $trainingEntryPointScript
 * @property string $transformEntryPointScript
 */
class CustomModelTrainingParameters extends Shape
{
    /**
     * @param array{
     *     sourceS3DirectoryPath: string,
     *     trainingEntryPointScript?: string,
     *     transformEntryPointScript?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
