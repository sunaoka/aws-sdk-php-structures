<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetInstanceOnboardingJobStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 */
class GetInstanceOnboardingJobStatusRequest extends Request
{
    /**
     * @param array{connectInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
