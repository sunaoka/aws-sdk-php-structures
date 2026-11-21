<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER' $contentType
 * @property string $value
 * @property string|null $displayName
 * @property string|null $subjectArea
 * @property 'DOWNLOAD'|'VIEW'|'REQUEST_ACCESS' $accessType
 */
class TrustCenterDocumentAttribute extends Shape
{
    /**
     * @param array{
     *     contentType: 'EMAIL'|'PHONE_NUMBER'|'LINK'|'OTHER',
     *     value: string,
     *     displayName?: string|null,
     *     subjectArea?: string|null,
     *     accessType: 'DOWNLOAD'|'VIEW'|'REQUEST_ACCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
