<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomainUnitsForParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string $parentDomainUnitIdentifier
 */
class ListDomainUnitsForParentRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     parentDomainUnitIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
