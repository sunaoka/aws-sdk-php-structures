<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CertificateAuthorityArnList
 * @property bool $Enabled
 */
class AwsMskClusterClusterInfoClientAuthenticationTlsDetails extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityArnList?: list<string>,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
