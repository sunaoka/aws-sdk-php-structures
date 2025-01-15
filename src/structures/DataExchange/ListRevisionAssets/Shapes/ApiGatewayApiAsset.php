<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiDescription
 * @property string|null $ApiEndpoint
 * @property string|null $ApiId
 * @property string|null $ApiKey
 * @property string|null $ApiName
 * @property string|null $ApiSpecificationDownloadUrl
 * @property \Aws\Api\DateTimeResult|null $ApiSpecificationDownloadUrlExpiresAt
 * @property 'REST'|null $ProtocolType
 * @property string|null $Stage
 */
class ApiGatewayApiAsset extends Shape
{
    /**
     * @param array{
     *     ApiDescription?: string|null,
     *     ApiEndpoint?: string|null,
     *     ApiId?: string|null,
     *     ApiKey?: string|null,
     *     ApiName?: string|null,
     *     ApiSpecificationDownloadUrl?: string|null,
     *     ApiSpecificationDownloadUrlExpiresAt?: \Aws\Api\DateTimeResult|null,
     *     ProtocolType?: 'REST'|null,
     *     Stage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
