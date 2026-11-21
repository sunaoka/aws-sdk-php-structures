<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DescribeGlobalInferenceGatewayRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
