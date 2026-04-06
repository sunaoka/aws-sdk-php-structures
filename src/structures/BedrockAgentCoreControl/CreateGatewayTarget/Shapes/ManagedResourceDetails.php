<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domain
 * @property string|null $resourceGatewayArn
 * @property string|null $resourceAssociationArn
 */
class ManagedResourceDetails extends Shape
{
    /**
     * @param array{
     *     domain?: string|null,
     *     resourceGatewayArn?: string|null,
     *     resourceAssociationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
