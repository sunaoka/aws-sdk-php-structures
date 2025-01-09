<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $businessName
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     name?: string,
     *     email?: string,
     *     phone?: string,
     *     businessName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
