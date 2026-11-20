<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TextAlternative>|null $Text
 * @property list<TextListAlternative>|null $TextList
 * @property list<AdditionalResourcesAlternative>|null $AdditionalResources
 * @property list<UseCasesAlternative>|null $UseCases
 * @property list<CaseStudiesAlternative>|null $CaseStudies
 */
class ContentAlternatives extends Shape
{
    /**
     * @param array{
     *     Text?: list<TextAlternative>|null,
     *     TextList?: list<TextListAlternative>|null,
     *     AdditionalResources?: list<AdditionalResourcesAlternative>|null,
     *     UseCases?: list<UseCasesAlternative>|null,
     *     CaseStudies?: list<CaseStudiesAlternative>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
