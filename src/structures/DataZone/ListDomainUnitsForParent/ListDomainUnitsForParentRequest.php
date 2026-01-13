<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomainUnitsForParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $parentDomainUnitIdentifier
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListDomainUnitsForParentRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     parentDomainUnitIdentifier: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
