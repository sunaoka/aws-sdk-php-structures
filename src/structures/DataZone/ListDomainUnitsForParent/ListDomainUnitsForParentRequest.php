<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomainUnitsForParent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 25> $maxResults
 * @property string $nextToken
 * @property string $parentDomainUnitIdentifier
 */
class ListDomainUnitsForParentRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 25>,
     *     nextToken?: string,
     *     parentDomainUnitIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
