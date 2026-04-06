<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CaCertificatesBundleSource $CaCertificatesBundleSource
 * @property Shapes\Tags|null $Tags
 */
class CreateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CaCertificatesBundleSource: Shapes\CaCertificatesBundleSource,
     *     Tags?: Shapes\Tags|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
