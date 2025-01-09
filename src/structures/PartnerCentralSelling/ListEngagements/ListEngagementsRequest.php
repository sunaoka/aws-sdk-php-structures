<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string> $CreatedBy
 * @property list<string> $EngagementIdentifier
 * @property list<string> $ExcludeCreatedBy
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\EngagementSort $Sort
 */
class ListEngagementsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: list<string>,
     *     EngagementIdentifier?: list<string>,
     *     ExcludeCreatedBy?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Sort?: Shapes\EngagementSort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
