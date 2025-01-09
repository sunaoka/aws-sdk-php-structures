<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetConnectInstanceConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectInstanceId
 * @property string $serviceLinkedRoleArn
 * @property EncryptionConfig $encryptionConfig
 */
class InstanceConfig extends Shape
{
    /**
     * @param array{
     *     connectInstanceId: string,
     *     serviceLinkedRoleArn: string,
     *     encryptionConfig: EncryptionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
