<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByTrustStore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'required'|'optional'|null $Mode
 * @property TrustStoreConfig|null $TrustStoreConfig
 */
class ViewerMtlsConfig extends Shape
{
    /**
     * @param array{
     *     Mode?: 'required'|'optional'|null,
     *     TrustStoreConfig?: TrustStoreConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
