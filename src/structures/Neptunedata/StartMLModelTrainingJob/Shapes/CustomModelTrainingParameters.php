<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartMLModelTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceS3DirectoryPath
 * @property string|null $trainingEntryPointScript
 * @property string|null $transformEntryPointScript
 */
class CustomModelTrainingParameters extends Shape
{
    /**
     * @param array{
     *     sourceS3DirectoryPath: string,
     *     trainingEntryPointScript?: string|null,
     *     transformEntryPointScript?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
