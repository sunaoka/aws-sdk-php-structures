<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateMLModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MLModelId
 * @property string|null $MLModelName
 * @property 'REGRESSION'|'BINARY'|'MULTICLASS' $MLModelType
 * @property array<string, string>|null $Parameters
 * @property string $TrainingDataSourceId
 * @property string|null $Recipe
 * @property string|null $RecipeUri
 */
class CreateMLModelRequest extends Request
{
    /**
     * @param array{
     *     MLModelId: string,
     *     MLModelName?: string|null,
     *     MLModelType: 'REGRESSION'|'BINARY'|'MULTICLASS',
     *     Parameters?: array<string, string>|null,
     *     TrainingDataSourceId: string,
     *     Recipe?: string|null,
     *     RecipeUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
