<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\GlobalInferenceGatewayRouting|null $Routing
 * @property string $ExecutionRoleArn
 * @property list<Shapes\GlobalInferenceGatewayMember> $Gateways
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGlobalInferenceGatewayRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Routing?: Shapes\GlobalInferenceGatewayRouting|null,
     *     ExecutionRoleArn: string,
     *     Gateways: list<Shapes\GlobalInferenceGatewayMember>,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
