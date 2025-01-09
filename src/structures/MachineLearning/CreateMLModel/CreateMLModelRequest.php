<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateMLModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 * @property string $MLModelName
 * @property 'REGRESSION'|'BINARY'|'MULTICLASS' $MLModelType
 * @property array<string, string> $Parameters
 * @property string $TrainingDataSourceId
 * @property string $Recipe
 * @property string $RecipeUri
 */
class CreateMLModelRequest extends Request
{
    /**
     * @param array{
     *     MLModelId: string,
     *     MLModelName?: string,
     *     MLModelType: 'REGRESSION'|'BINARY'|'MULTICLASS',
     *     Parameters?: array<string, string>,
     *     TrainingDataSourceId: string,
     *     Recipe?: string,
     *     RecipeUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
