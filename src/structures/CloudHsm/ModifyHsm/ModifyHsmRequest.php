<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ModifyHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmArn
 * @property string|null $SubnetId
 * @property string|null $EniIp
 * @property string|null $IamRoleArn
 * @property string|null $ExternalId
 * @property string|null $SyslogIp
 */
class ModifyHsmRequest extends Request
{
    /**
     * @param array{
     *     HsmArn: string,
     *     SubnetId?: string|null,
     *     EniIp?: string|null,
     *     IamRoleArn?: string|null,
     *     ExternalId?: string|null,
     *     SyslogIp?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
