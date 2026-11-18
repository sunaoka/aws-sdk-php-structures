<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\FunctionTarget $target
 * @property string $requestExpression
 * @property string|null $responseExpression
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $eventBridgeDelivery
 * @property array<string, string>|null $tags
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     target: Shapes\FunctionTarget,
     *     requestExpression: string,
     *     responseExpression?: string|null,
     *     description?: string|null,
     *     eventBridgeDelivery?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
