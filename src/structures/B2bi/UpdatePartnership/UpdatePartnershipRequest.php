<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdatePartnership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $partnershipId
 * @property string|null $name
 * @property list<string>|null $capabilities
 */
class UpdatePartnershipRequest extends Request
{
    /**
     * @param array{
     *     partnershipId: string,
     *     name?: string|null,
     *     capabilities?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
