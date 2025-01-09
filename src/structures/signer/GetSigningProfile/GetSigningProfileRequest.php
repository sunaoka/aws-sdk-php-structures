<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileName
 * @property string $profileOwner
 */
class GetSigningProfileRequest extends Request
{
    /**
     * @param array{
     *     profileName: string,
     *     profileOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
