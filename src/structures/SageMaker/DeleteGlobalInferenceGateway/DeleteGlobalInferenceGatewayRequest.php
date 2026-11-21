<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteGlobalInferenceGatewayRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
