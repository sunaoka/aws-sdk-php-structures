<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 */
class EnableProfileRequest extends Request
{
    /**
     * @param array{profileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
