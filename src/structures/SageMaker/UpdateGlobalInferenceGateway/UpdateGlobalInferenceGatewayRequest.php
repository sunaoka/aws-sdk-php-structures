<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\GlobalInferenceGatewayRouting $Routing
 */
class UpdateGlobalInferenceGatewayRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     Routing: Shapes\GlobalInferenceGatewayRouting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
