<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseStudy|null $caseStudy
 * @property SpecializationDetail|null $specializationDetail
 * @property TrustCenterSource|null $trustCenterSource
 * @property TrustCenterCertificationAttribute|null $trustCenterCertification
 * @property TrustCenterDocumentAttribute|null $trustCenterDocument
 * @property TrustCenterControl|null $trustCenterControl
 * @property TrustCenterFaqAttribute|null $trustCenterFaq
 * @property TrustCenterUpdateAttribute|null $trustCenterUpdate
 */
class ListingAttributeResults extends Shape
{
    /**
     * @param array{
     *     caseStudy?: CaseStudy|null,
     *     specializationDetail?: SpecializationDetail|null,
     *     trustCenterSource?: TrustCenterSource|null,
     *     trustCenterCertification?: TrustCenterCertificationAttribute|null,
     *     trustCenterDocument?: TrustCenterDocumentAttribute|null,
     *     trustCenterControl?: TrustCenterControl|null,
     *     trustCenterFaq?: TrustCenterFaqAttribute|null,
     *     trustCenterUpdate?: TrustCenterUpdateAttribute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
