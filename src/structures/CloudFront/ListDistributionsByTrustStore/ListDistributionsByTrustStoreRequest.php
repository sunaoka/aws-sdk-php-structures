<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreIdentifier
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListDistributionsByTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreIdentifier: string,
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
