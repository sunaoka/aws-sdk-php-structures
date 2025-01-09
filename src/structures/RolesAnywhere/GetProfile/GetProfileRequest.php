<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 */
class GetProfileRequest extends Request
{
    /**
     * @param array{profileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
