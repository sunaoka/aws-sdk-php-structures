<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEntityOwners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $entityIdentifier
 * @property 'DOMAIN_UNIT' $entityType
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListEntityOwnersRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     entityIdentifier: string,
     *     entityType: 'DOMAIN_UNIT',
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
