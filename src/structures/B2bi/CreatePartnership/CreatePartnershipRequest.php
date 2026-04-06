<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property list<string> $capabilities
 * @property Shapes\CapabilityOptions|null $capabilityOptions
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePartnershipRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     name: string,
     *     email: string,
     *     phone?: string|null,
     *     capabilities: list<string>,
     *     capabilityOptions?: Shapes\CapabilityOptions|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
