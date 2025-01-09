<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DeleteInstanceOnboardingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 */
class DeleteInstanceOnboardingJobRequest extends Request
{
    /**
     * @param array{connectInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
