<?php

namespace Sunaoka\Aws\Structures\DataZone\RemoveEntityOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'DOMAIN_UNIT' $entityType
 * @property Shapes\OwnerProperties $owner
 */
class RemoveEntityOwnerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'DOMAIN_UNIT',
     *     owner: Shapes\OwnerProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
