<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $Keyword
 * @property Shapes\EngagementSearchFilter|null $Filter
 * @property string|null $GroupId
 * @property Shapes\EngagementSearchSort|null $Sort
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchEngagementsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Keyword?: string|null,
     *     Filter?: Shapes\EngagementSearchFilter|null,
     *     GroupId?: string|null,
     *     Sort?: Shapes\EngagementSearchSort|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
