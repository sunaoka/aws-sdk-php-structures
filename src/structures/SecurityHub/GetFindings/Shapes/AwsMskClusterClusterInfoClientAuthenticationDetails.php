<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoClientAuthenticationSaslDetails|null $Sasl
 * @property AwsMskClusterClusterInfoClientAuthenticationUnauthenticatedDetails|null $Unauthenticated
 * @property AwsMskClusterClusterInfoClientAuthenticationTlsDetails|null $Tls
 */
class AwsMskClusterClusterInfoClientAuthenticationDetails extends Shape
{
    /**
     * @param array{
     *     Sasl?: AwsMskClusterClusterInfoClientAuthenticationSaslDetails|null,
     *     Unauthenticated?: AwsMskClusterClusterInfoClientAuthenticationUnauthenticatedDetails|null,
     *     Tls?: AwsMskClusterClusterInfoClientAuthenticationTlsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
