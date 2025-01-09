<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmArn
 * @property string $SubnetId
 * @property string $EniIp
 * @property string $IamRoleArn
 * @property string $ExternalId
 * @property string $SyslogIp
 */
class ModifyHsmRequest extends Request
{
    /**
     * @param array{
     *     HsmArn: string,
     *     SubnetId?: string,
     *     EniIp?: string,
     *     IamRoleArn?: string,
     *     ExternalId?: string,
     *     SyslogIp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
