<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiDescription
 * @property string $ApiEndpoint
 * @property string $ApiId
 * @property string $ApiKey
 * @property string $ApiName
 * @property string $ApiSpecificationDownloadUrl
 * @property \Aws\Api\DateTimeResult $ApiSpecificationDownloadUrlExpiresAt
 * @property 'REST' $ProtocolType
 * @property string $Stage
 */
class ApiGatewayApiAsset extends Shape
{
    /**
     * @param array{
     *     ApiDescription?: string,
     *     ApiEndpoint?: string,
     *     ApiId?: string,
     *     ApiKey?: string,
     *     ApiName?: string,
     *     ApiSpecificationDownloadUrl?: string,
     *     ApiSpecificationDownloadUrlExpiresAt?: \Aws\Api\DateTimeResult,
     *     ProtocolType?: 'REST',
     *     Stage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
