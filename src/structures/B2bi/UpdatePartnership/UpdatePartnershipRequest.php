<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $partnershipId
 * @property string|null $name
 * @property list<string>|null $capabilities
 * @property Shapes\CapabilityOptions|null $capabilityOptions
 */
class UpdatePartnershipRequest extends Request
{
    /**
     * @param array{
     *     partnershipId: string,
     *     name?: string|null,
     *     capabilities?: list<string>|null,
     *     capabilityOptions?: Shapes\CapabilityOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
