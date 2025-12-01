<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property list<string>|null $CreatedBy
 * @property list<string>|null $ExcludeCreatedBy
 * @property list<'CustomerProject'|'Lead'>|null $ContextTypes
 * @property list<'CustomerProject'|'Lead'>|null $ExcludeContextTypes
 * @property Shapes\EngagementSort|null $Sort
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $EngagementIdentifier
 */
class ListEngagementsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: list<string>|null,
     *     ExcludeCreatedBy?: list<string>|null,
     *     ContextTypes?: list<'CustomerProject'|'Lead'>|null,
     *     ExcludeContextTypes?: list<'CustomerProject'|'Lead'>|null,
     *     Sort?: Shapes\EngagementSort|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     EngagementIdentifier?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
