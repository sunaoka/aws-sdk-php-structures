<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceAdmin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceAdminArn
 * @property string $AppInstanceArn
 */
class DescribeAppInstanceAdminRequest extends Request
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
