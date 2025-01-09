<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnforceHTTPS
 * @property 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'|'Policy-Min-TLS-1-2-PFS-2023-10' $TLSSecurityPolicy
 * @property bool $CustomEndpointEnabled
 * @property string $CustomEndpoint
 * @property string $CustomEndpointCertificateArn
 */
class DomainEndpointOptions extends Shape
{
    /**
     * @param array{
     *     EnforceHTTPS?: bool,
     *     TLSSecurityPolicy?: 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'|'Policy-Min-TLS-1-2-PFS-2023-10',
     *     CustomEndpointEnabled?: bool,
     *     CustomEndpoint?: string,
     *     CustomEndpointCertificateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
