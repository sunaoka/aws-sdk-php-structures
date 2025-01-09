<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $partnershipId
 * @property string $name
 * @property list<string> $capabilities
 * @property Shapes\CapabilityOptions $capabilityOptions
 */
class UpdatePartnershipRequest extends Request
{
    /**
     * @param array{
     *     partnershipId: string,
     *     name?: string,
     *     capabilities?: list<string>,
     *     capabilityOptions?: Shapes\CapabilityOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
