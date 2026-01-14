<?php

namespace Sunaoka\Aws\Structures\DataZone\AddEntityOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'DOMAIN_UNIT' $entityType
 * @property string $entityIdentifier
 * @property Shapes\OwnerProperties $owner
 * @property string|null $clientToken
 */
class AddEntityOwnerRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityType: 'DOMAIN_UNIT',
     *     entityIdentifier: string,
     *     owner: Shapes\OwnerProperties,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
