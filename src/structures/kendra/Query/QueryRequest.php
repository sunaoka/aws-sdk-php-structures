<?php

namespace Sunaoka\Aws\Structures\kendra\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string|null $QueryText
 * @property Shapes\AttributeFilter|null $AttributeFilter
 * @property list<Shapes\Facet>|null $Facets
 * @property list<string>|null $RequestedDocumentAttributes
 * @property 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER'|null $QueryResultTypeFilter
 * @property list<Shapes\DocumentRelevanceConfiguration>|null $DocumentRelevanceOverrideConfigurations
 * @property int|null $PageNumber
 * @property int|null $PageSize
 * @property Shapes\SortingConfiguration|null $SortingConfiguration
 * @property list<Shapes\SortingConfiguration>|null $SortingConfigurations
 * @property Shapes\UserContext|null $UserContext
 * @property string|null $VisitorId
 * @property Shapes\SpellCorrectionConfiguration|null $SpellCorrectionConfiguration
 * @property Shapes\CollapseConfiguration|null $CollapseConfiguration
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryText?: string|null,
     *     AttributeFilter?: Shapes\AttributeFilter|null,
     *     Facets?: list<Shapes\Facet>|null,
     *     RequestedDocumentAttributes?: list<string>|null,
     *     QueryResultTypeFilter?: 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER'|null,
     *     DocumentRelevanceOverrideConfigurations?: list<Shapes\DocumentRelevanceConfiguration>|null,
     *     PageNumber?: int|null,
     *     PageSize?: int|null,
     *     SortingConfiguration?: Shapes\SortingConfiguration|null,
     *     SortingConfigurations?: list<Shapes\SortingConfiguration>|null,
     *     UserContext?: Shapes\UserContext|null,
     *     VisitorId?: string|null,
     *     SpellCorrectionConfiguration?: Shapes\SpellCorrectionConfiguration|null,
     *     CollapseConfiguration?: Shapes\CollapseConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
