<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER' $contentType
 * @property string $value
 * @property string|null $displayName
 * @property 'CASE_STUDY_WEBSITE' $resourceType
 */
class CaseStudyResource extends Shape
{
    /**
     * @param array{
     *     contentType: 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER',
     *     value: string,
     *     displayName?: string|null,
     *     resourceType: 'CASE_STUDY_WEBSITE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
