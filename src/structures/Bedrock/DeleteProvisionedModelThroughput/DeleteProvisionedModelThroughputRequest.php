<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $provisionedModelId
 */
class DeleteProvisionedModelThroughputRequest extends Request
{
    /**
     * @param array{provisionedModelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
