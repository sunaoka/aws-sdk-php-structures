<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property ModelMapping|null $modelMapping
 * @property list<InferenceOperationConfiguration>|null $operations
 */
class InferenceProviderTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     endpoint: string,
     *     modelMapping?: ModelMapping|null,
     *     operations?: list<InferenceOperationConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
