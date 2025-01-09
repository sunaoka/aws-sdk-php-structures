<?php

namespace Sunaoka\Aws\Structures\kendra\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $QueryText
 * @property Shapes\AttributeFilter $AttributeFilter
 * @property list<Shapes\Facet> $Facets
 * @property list<string> $RequestedDocumentAttributes
 * @property 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER' $QueryResultTypeFilter
 * @property list<Shapes\DocumentRelevanceConfiguration> $DocumentRelevanceOverrideConfigurations
 * @property int $PageNumber
 * @property int $PageSize
 * @property Shapes\SortingConfiguration $SortingConfiguration
 * @property list<Shapes\SortingConfiguration> $SortingConfigurations
 * @property Shapes\UserContext $UserContext
 * @property string $VisitorId
 * @property Shapes\SpellCorrectionConfiguration $SpellCorrectionConfiguration
 * @property Shapes\CollapseConfiguration $CollapseConfiguration
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     QueryText?: string,
     *     AttributeFilter?: Shapes\AttributeFilter,
     *     Facets?: list<Shapes\Facet>,
     *     RequestedDocumentAttributes?: list<string>,
     *     QueryResultTypeFilter?: 'DOCUMENT'|'QUESTION_ANSWER'|'ANSWER',
     *     DocumentRelevanceOverrideConfigurations?: list<Shapes\DocumentRelevanceConfiguration>,
     *     PageNumber?: int,
     *     PageSize?: int,
     *     SortingConfiguration?: Shapes\SortingConfiguration,
     *     SortingConfigurations?: list<Shapes\SortingConfiguration>,
     *     UserContext?: Shapes\UserContext,
     *     VisitorId?: string,
     *     SpellCorrectionConfiguration?: Shapes\SpellCorrectionConfiguration,
     *     CollapseConfiguration?: Shapes\CollapseConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
