<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRootDomainUnitOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $currentOwner
 * @property string $newOwner
 * @property string|null $clientToken
 */
class UpdateRootDomainUnitOwnerRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     currentOwner: string,
     *     newOwner: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
