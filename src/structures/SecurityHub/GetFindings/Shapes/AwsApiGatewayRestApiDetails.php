<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property string $CreatedDate
 * @property string $Version
 * @property list<string> $BinaryMediaTypes
 * @property int $MinimumCompressionSize
 * @property string $ApiKeySource
 * @property AwsApiGatewayEndpointConfiguration $EndpointConfiguration
 */
class AwsApiGatewayRestApiDetails extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Description?: string,
     *     CreatedDate?: string,
     *     Version?: string,
     *     BinaryMediaTypes?: list<string>,
     *     MinimumCompressionSize?: int,
     *     ApiKeySource?: string,
     *     EndpointConfiguration?: AwsApiGatewayEndpointConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
