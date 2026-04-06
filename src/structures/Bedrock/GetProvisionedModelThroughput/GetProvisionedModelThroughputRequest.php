<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $provisionedModelId
 */
class GetProvisionedModelThroughputRequest extends Request
{
    /**
     * @param array{provisionedModelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
