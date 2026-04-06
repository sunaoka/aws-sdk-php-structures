<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetFoundationModelAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelId
 */
class GetFoundationModelAvailabilityRequest extends Request
{
    /**
     * @param array{modelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
