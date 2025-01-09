<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiEndpoint
 * @property string $ApiId
 * @property string $ApiKeySelectionExpression
 * @property string $CreatedDate
 * @property string $Description
 * @property string $Version
 * @property string $Name
 * @property string $ProtocolType
 * @property string $RouteSelectionExpression
 * @property AwsCorsConfiguration $CorsConfiguration
 */
class AwsApiGatewayV2ApiDetails extends Shape
{
    /**
     * @param array{
     *     ApiEndpoint?: string,
     *     ApiId?: string,
     *     ApiKeySelectionExpression?: string,
     *     CreatedDate?: string,
     *     Description?: string,
     *     Version?: string,
     *     Name?: string,
     *     ProtocolType?: string,
     *     RouteSelectionExpression?: string,
     *     CorsConfiguration?: AwsCorsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
