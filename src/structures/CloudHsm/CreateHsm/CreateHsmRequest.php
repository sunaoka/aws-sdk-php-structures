<?php

namespace Sunaoka\Aws\Structures\CloudHsm\CreateHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetId
 * @property string $SshKey
 * @property string|null $EniIp
 * @property string $IamRoleArn
 * @property string|null $ExternalId
 * @property 'PRODUCTION' $SubscriptionType
 * @property string|null $ClientToken
 * @property string|null $SyslogIp
 */
class CreateHsmRequest extends Request
{
    /**
     * @param array{
     *     SubnetId: string,
     *     SshKey: string,
     *     EniIp?: string|null,
     *     IamRoleArn: string,
     *     ExternalId?: string|null,
     *     SubscriptionType: 'PRODUCTION',
     *     ClientToken?: string|null,
     *     SyslogIp?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
