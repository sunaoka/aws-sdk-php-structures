<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property string|null $providerPath
 * @property list<ModelEntry>|null $models
 */
class InferenceOperationConfiguration extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     providerPath?: string|null,
     *     models?: list<ModelEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
