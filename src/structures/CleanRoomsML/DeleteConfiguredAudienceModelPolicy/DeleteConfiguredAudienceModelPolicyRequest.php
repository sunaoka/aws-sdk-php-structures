<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredAudienceModelPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 */
class DeleteConfiguredAudienceModelPolicyRequest extends Request
{
    /**
     * @param array{configuredAudienceModelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
