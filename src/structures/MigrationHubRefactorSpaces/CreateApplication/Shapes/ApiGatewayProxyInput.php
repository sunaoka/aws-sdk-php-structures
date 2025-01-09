<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGIONAL'|'PRIVATE' $EndpointType
 * @property string $StageName
 */
class ApiGatewayProxyInput extends Shape
{
    /**
     * @param array{
     *     EndpointType?: 'REGIONAL'|'PRIVATE',
     *     StageName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
