<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DataStore' $dataSourceType
 * @property array<string, CodegenGenericDataModel> $models
 * @property array<string, CodegenGenericDataEnum> $enums
 * @property array<string, CodegenGenericDataNonModel> $nonModels
 */
class CodegenJobGenericDataSchema extends Shape
{
    /**
     * @param array{
     *     dataSourceType: 'DataStore',
     *     models: array<string, CodegenGenericDataModel>,
     *     enums: array<string, CodegenGenericDataEnum>,
     *     nonModels: array<string, CodegenGenericDataNonModel>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
