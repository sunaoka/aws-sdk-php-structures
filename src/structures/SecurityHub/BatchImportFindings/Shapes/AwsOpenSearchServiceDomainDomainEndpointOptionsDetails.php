<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomEndpointCertificateArn
 * @property bool|null $CustomEndpointEnabled
 * @property bool|null $EnforceHTTPS
 * @property string|null $CustomEndpoint
 * @property string|null $TLSSecurityPolicy
 */
class AwsOpenSearchServiceDomainDomainEndpointOptionsDetails extends Shape
{
    /**
     * @param array{
     *     CustomEndpointCertificateArn?: string|null,
     *     CustomEndpointEnabled?: bool|null,
     *     EnforceHTTPS?: bool|null,
     *     CustomEndpoint?: string|null,
     *     TLSSecurityPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
