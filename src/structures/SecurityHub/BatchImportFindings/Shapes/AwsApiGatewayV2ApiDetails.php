<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApiEndpoint
 * @property string|null $ApiId
 * @property string|null $ApiKeySelectionExpression
 * @property string|null $CreatedDate
 * @property string|null $Description
 * @property string|null $Version
 * @property string|null $Name
 * @property string|null $ProtocolType
 * @property string|null $RouteSelectionExpression
 * @property AwsCorsConfiguration|null $CorsConfiguration
 */
class AwsApiGatewayV2ApiDetails extends Shape
{
    /**
     * @param array{
     *     ApiEndpoint?: string|null,
     *     ApiId?: string|null,
     *     ApiKeySelectionExpression?: string|null,
     *     CreatedDate?: string|null,
     *     Description?: string|null,
     *     Version?: string|null,
     *     Name?: string|null,
     *     ProtocolType?: string|null,
     *     RouteSelectionExpression?: string|null,
     *     CorsConfiguration?: AwsCorsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
