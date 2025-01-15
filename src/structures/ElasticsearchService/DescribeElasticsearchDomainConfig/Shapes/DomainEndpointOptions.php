<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnforceHTTPS
 * @property 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'|'Policy-Min-TLS-1-2-PFS-2023-10'|null $TLSSecurityPolicy
 * @property bool|null $CustomEndpointEnabled
 * @property string|null $CustomEndpoint
 * @property string|null $CustomEndpointCertificateArn
 */
class DomainEndpointOptions extends Shape
{
    /**
     * @param array{
     *     EnforceHTTPS?: bool|null,
     *     TLSSecurityPolicy?: 'Policy-Min-TLS-1-0-2019-07'|'Policy-Min-TLS-1-2-2019-07'|'Policy-Min-TLS-1-2-PFS-2023-10'|null,
     *     CustomEndpointEnabled?: bool|null,
     *     CustomEndpoint?: string|null,
     *     CustomEndpointCertificateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
