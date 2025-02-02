<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEngagementMembersRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
