<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetId
 * @property string $SshKey
 * @property string $EniIp
 * @property string $IamRoleArn
 * @property string $ExternalId
 * @property 'PRODUCTION' $SubscriptionType
 * @property string $ClientToken
 * @property string $SyslogIp
 */
class CreateHsmRequest extends Request
{
    /**
     * @param array{
     *     SubnetId: string,
     *     SshKey: string,
     *     EniIp?: string,
     *     IamRoleArn: string,
     *     ExternalId?: string,
     *     SubscriptionType: 'PRODUCTION',
     *     ClientToken?: string,
     *     SyslogIp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
