<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ListenerTlsFileCertificate|null $file
 * @property ListenerTlsSdsCertificate|null $sds
 */
class ClientTlsCertificate extends Shape
{
    /**
     * @param array{
     *     file?: ListenerTlsFileCertificate|null,
     *     sds?: ListenerTlsSdsCertificate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
