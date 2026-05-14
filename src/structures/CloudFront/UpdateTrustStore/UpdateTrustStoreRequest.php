<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\CaCertificatesBundleSource|null $CaCertificatesBundleSource
 * @property bool|null $UseClientCertificateOCSPEndpoint
 * @property string $IfMatch
 */
class UpdateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     CaCertificatesBundleSource?: Shapes\CaCertificatesBundleSource|null,
     *     UseClientCertificateOCSPEndpoint?: bool|null,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
