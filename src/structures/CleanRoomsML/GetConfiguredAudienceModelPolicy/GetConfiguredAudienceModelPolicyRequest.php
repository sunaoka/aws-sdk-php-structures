<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModelPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 */
class GetConfiguredAudienceModelPolicyRequest extends Request
{
    /**
     * @param array{configuredAudienceModelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
