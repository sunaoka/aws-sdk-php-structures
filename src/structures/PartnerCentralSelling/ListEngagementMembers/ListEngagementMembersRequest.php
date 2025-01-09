<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListEngagementMembersRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
