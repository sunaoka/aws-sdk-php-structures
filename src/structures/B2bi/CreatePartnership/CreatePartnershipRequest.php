<?php

namespace Sunaoka\Aws\Structures\B2bi\CreatePartnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profileId
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property list<string> $capabilities
 * @property Shapes\CapabilityOptions $capabilityOptions
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreatePartnershipRequest extends Request
{
    /**
     * @param array{
     *     profileId: string,
     *     name: string,
     *     email: string,
     *     phone?: string,
     *     capabilities: list<string>,
     *     capabilityOptions?: Shapes\CapabilityOptions,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
