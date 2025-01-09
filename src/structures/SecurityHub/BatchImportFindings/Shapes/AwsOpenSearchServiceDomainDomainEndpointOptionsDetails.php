<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomEndpointCertificateArn
 * @property bool $CustomEndpointEnabled
 * @property bool $EnforceHTTPS
 * @property string $CustomEndpoint
 * @property string $TLSSecurityPolicy
 */
class AwsOpenSearchServiceDomainDomainEndpointOptionsDetails extends Shape
{
    /**
     * @param array{
     *     CustomEndpointCertificateArn?: string,
     *     CustomEndpointEnabled?: bool,
     *     EnforceHTTPS?: bool,
     *     CustomEndpoint?: string,
     *     TLSSecurityPolicy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
