<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListenerTlsAcmCertificate|null $acm
 * @property ListenerTlsFileCertificate|null $file
 * @property ListenerTlsSdsCertificate|null $sds
 */
class ListenerTlsCertificate extends Shape
{
    /**
     * @param array{
     *     acm?: ListenerTlsAcmCertificate|null,
     *     file?: ListenerTlsFileCertificate|null,
     *     sds?: ListenerTlsSdsCertificate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
