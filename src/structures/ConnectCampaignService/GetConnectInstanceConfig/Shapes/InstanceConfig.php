<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetConnectInstanceConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectInstanceId
 * @property EncryptionConfig $encryptionConfig
 * @property string $serviceLinkedRoleArn
 */
class InstanceConfig extends Shape
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     encryptionConfig: EncryptionConfig,
     *     serviceLinkedRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
