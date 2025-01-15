<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $provisionedModelId
 * @property string|null $desiredProvisionedModelName
 * @property string|null $desiredModelId
 */
class UpdateProvisionedModelThroughputRequest extends Request
{
    /**
     * @param array{
     *     provisionedModelId: string,
     *     desiredProvisionedModelName?: string|null,
     *     desiredModelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
