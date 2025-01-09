<?php

namespace Sunaoka\Aws\Structures\Iot\DetachSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string $securityProfileTargetArn
 */
class DetachSecurityProfileRequest extends Request
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
