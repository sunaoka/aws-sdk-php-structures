<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $FrameworkId
 * @property Shapes\AssessmentTargetFilter|null $AssessmentTargetFilter
 * @property Shapes\FrameworkFilters|null $FrameworkFilters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     FrameworkId?: string|null,
     *     AssessmentTargetFilter?: Shapes\AssessmentTargetFilter|null,
     *     FrameworkFilters?: Shapes\FrameworkFilters|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
