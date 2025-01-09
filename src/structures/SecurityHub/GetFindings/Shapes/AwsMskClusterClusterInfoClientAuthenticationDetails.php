<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoClientAuthenticationSaslDetails $Sasl
 * @property AwsMskClusterClusterInfoClientAuthenticationUnauthenticatedDetails $Unauthenticated
 * @property AwsMskClusterClusterInfoClientAuthenticationTlsDetails $Tls
 */
class AwsMskClusterClusterInfoClientAuthenticationDetails extends Shape
{
    /**
     * @param array{
     *     Sasl?: AwsMskClusterClusterInfoClientAuthenticationSaslDetails,
     *     Unauthenticated?: AwsMskClusterClusterInfoClientAuthenticationUnauthenticatedDetails,
     *     Tls?: AwsMskClusterClusterInfoClientAuthenticationTlsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
