<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $SecurityProfileId
 */
class DeleteSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SecurityProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
