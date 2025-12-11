<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRootDomainUnitOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $currentOwner
 * @property string $domainIdentifier
 * @property string $newOwner
 */
class UpdateRootDomainUnitOwnerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     currentOwner: string,
     *     domainIdentifier: string,
     *     newOwner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
