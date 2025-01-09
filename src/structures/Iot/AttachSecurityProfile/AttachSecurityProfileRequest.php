<?php

namespace Sunaoka\Aws\Structures\Iot\AttachSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string $securityProfileTargetArn
 */
class AttachSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     securityProfileTargetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
