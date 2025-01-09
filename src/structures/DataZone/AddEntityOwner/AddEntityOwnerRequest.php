<?php

namespace Sunaoka\Aws\Structures\DataZone\AddEntityOwner;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'DOMAIN_UNIT' $entityType
 * @property Shapes\OwnerProperties $owner
 */
class AddEntityOwnerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
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
