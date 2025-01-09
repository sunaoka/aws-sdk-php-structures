<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 */
class DisableProfileRequest extends Request
{
    /**
     * @param array{profileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
