<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionTenantsByCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $WebACLArn
 * @property string|null $CertificateArn
 * @property string|null $Marker
 * @property int|null $MaxItems
 */
class ListDistributionTenantsByCustomizationRequest extends Request
{
    /**
     * @param array{
     *     WebACLArn?: string|null,
     *     CertificateArn?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
