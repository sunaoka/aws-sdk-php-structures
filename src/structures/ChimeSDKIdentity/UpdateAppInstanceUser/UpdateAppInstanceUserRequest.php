<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\UpdateAppInstanceUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceUserArn
 * @property string $Name
 * @property string $Metadata
 */
class UpdateAppInstanceUserRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceUserArn: string,
     *     Name: string,
     *     Metadata: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
