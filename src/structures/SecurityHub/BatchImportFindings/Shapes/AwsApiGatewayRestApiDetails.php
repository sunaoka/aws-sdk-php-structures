<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $CreatedDate
 * @property string|null $Version
 * @property list<string>|null $BinaryMediaTypes
 * @property int|null $MinimumCompressionSize
 * @property string|null $ApiKeySource
 * @property AwsApiGatewayEndpointConfiguration|null $EndpointConfiguration
 */
class AwsApiGatewayRestApiDetails extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CreatedDate?: string|null,
     *     Version?: string|null,
     *     BinaryMediaTypes?: list<string>|null,
     *     MinimumCompressionSize?: int|null,
     *     ApiKeySource?: string|null,
     *     EndpointConfiguration?: AwsApiGatewayEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
