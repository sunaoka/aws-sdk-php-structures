<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseStudyId
 * @property string $caseStudyName
 * @property string $shortDescription
 * @property EngagementDates|null $engagementDates
 * @property string|null $challenge
 * @property string|null $resolution
 * @property string|null $implementationApproach
 * @property string|null $outcome
 * @property list<CaseStudyResource>|null $resources
 */
class CaseStudy extends Shape
{
    /**
     * @param array{
     *     caseStudyId: string,
     *     caseStudyName: string,
     *     shortDescription: string,
     *     engagementDates?: EngagementDates|null,
     *     challenge?: string|null,
     *     resolution?: string|null,
     *     implementationApproach?: string|null,
     *     outcome?: string|null,
     *     resources?: list<CaseStudyResource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
