<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StartInstanceOnboardingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'KMS' $encryptionType
 * @property string $keyArn
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     encryptionType?: 'KMS',
     *     keyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
