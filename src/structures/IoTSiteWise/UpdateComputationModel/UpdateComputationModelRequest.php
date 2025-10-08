<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateComputationModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computationModelId
 * @property string $computationModelName
 * @property string|null $computationModelDescription
 * @property Shapes\ComputationModelConfiguration $computationModelConfiguration
 * @property array<string, Shapes\ComputationModelDataBindingValue> $computationModelDataBinding
 * @property string|null $clientToken
 */
class UpdateComputationModelRequest extends Request
{
    /**
     * @param array{
     *     computationModelId: string,
     *     computationModelName: string,
     *     computationModelDescription?: string|null,
     *     computationModelConfiguration: Shapes\ComputationModelConfiguration,
     *     computationModelDataBinding: array<string, Shapes\ComputationModelDataBindingValue>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
