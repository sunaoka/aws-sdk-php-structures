<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StartInstanceOnboardingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectInstanceId
 * @property Shapes\EncryptionConfig $encryptionConfig
 */
class StartInstanceOnboardingJobRequest extends Request
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     encryptionConfig: Shapes\EncryptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
