<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property string|null $ociDnsListenerIp
 */
class OciDnsForwardingConfig extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     ociDnsListenerIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
