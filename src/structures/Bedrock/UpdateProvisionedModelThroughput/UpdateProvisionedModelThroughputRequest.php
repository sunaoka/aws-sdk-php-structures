<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $provisionedModelId
 * @property string $desiredProvisionedModelName
 * @property string $desiredModelId
 */
class UpdateProvisionedModelThroughputRequest extends Request
{
    /**
     * @param array{
     *     provisionedModelId: string,
     *     desiredProvisionedModelName?: string,
     *     desiredModelId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
