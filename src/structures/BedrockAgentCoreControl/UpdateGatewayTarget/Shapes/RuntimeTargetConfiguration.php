<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $qualifier
 * @property HttpApiSchemaConfiguration|null $schema
 */
class RuntimeTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     qualifier?: string|null,
     *     schema?: HttpApiSchemaConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
