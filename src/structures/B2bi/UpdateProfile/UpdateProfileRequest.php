<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $businessName
 */
class UpdateProfileRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     name?: string|null,
     *     email?: string|null,
     *     phone?: string|null,
     *     businessName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
