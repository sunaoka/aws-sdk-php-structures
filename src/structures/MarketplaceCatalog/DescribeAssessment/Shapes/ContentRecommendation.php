<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERATED'|'INSUFFICIENT_CONTEXT' $Status
 * @property ContentAlternatives $Alternatives
 * @property list<FollowUpQuestion> $FollowUpQuestions
 * @property list<ListingFinding> $Findings
 */
class ContentRecommendation extends Shape
{
    /**
     * @param array{
     *     Status: 'GENERATED'|'INSUFFICIENT_CONTEXT',
     *     Alternatives: ContentAlternatives,
     *     FollowUpQuestions: list<FollowUpQuestion>,
     *     Findings: list<ListingFinding>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
