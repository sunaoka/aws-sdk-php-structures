<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateComputationModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $computationModelName
 * @property string|null $computationModelDescription
 * @property Shapes\ComputationModelConfiguration $computationModelConfiguration
 * @property array<string, Shapes\ComputationModelDataBindingValue> $computationModelDataBinding
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateComputationModelRequest extends Request
{
    /**
     * @param array{
     *     computationModelName: string,
     *     computationModelDescription?: string|null,
     *     computationModelConfiguration: Shapes\ComputationModelConfiguration,
     *     computationModelDataBinding: array<string, Shapes\ComputationModelDataBindingValue>,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
