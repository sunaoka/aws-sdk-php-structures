<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListenerTlsAcmCertificate $acm
 * @property ListenerTlsFileCertificate $file
 * @property ListenerTlsSdsCertificate $sds
 */
class ListenerTlsCertificate extends Shape
{
    /**
     * @param array{
     *     acm?: ListenerTlsAcmCertificate,
     *     file?: ListenerTlsFileCertificate,
     *     sds?: ListenerTlsSdsCertificate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
