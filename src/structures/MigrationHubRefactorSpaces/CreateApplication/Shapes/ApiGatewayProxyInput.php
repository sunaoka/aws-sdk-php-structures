<?php

namespace Sunaoka\Aws\Structures\MigrationHubRefactorSpaces\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REGIONAL'|'PRIVATE'|null $EndpointType
 * @property string|null $StageName
 */
class ApiGatewayProxyInput extends Shape
{
    /**
     * @param array{
     *     EndpointType?: 'REGIONAL'|'PRIVATE'|null,
     *     StageName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
