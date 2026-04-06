<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StartInstanceOnboardingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'KMS'|null $encryptionType
 * @property string|null $keyArn
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     encryptionType?: 'KMS'|null,
     *     keyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
