<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListenerTlsFileCertificate $file
 * @property ListenerTlsSdsCertificate $sds
 */
class ClientTlsCertificate extends Shape
{
    /**
     * @param array{
     *     file?: ListenerTlsFileCertificate,
     *     sds?: ListenerTlsSdsCertificate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
