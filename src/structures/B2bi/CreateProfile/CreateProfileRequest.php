<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $email
 * @property string $phone
 * @property string $businessName
 * @property 'ENABLED'|'DISABLED' $logging
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     email?: string|null,
     *     phone: string,
     *     businessName: string,
     *     logging: 'ENABLED'|'DISABLED',
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
