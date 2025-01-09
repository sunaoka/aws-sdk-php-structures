<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $businessName
 * @property 'ENABLED'|'DISABLED' $logging
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     email?: string,
     *     phone: string,
     *     businessName: string,
     *     logging: 'ENABLED'|'DISABLED',
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
