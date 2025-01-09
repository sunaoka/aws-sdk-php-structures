<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceAdminArn
 * @property string $AppInstanceArn
 */
class CreateAppInstanceAdminRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceAdminArn: string,
     *     AppInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
