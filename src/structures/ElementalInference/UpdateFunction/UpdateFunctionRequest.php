<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property Shapes\FunctionTarget|null $target
 * @property string|null $requestExpression
 * @property string|null $responseExpression
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $eventBridgeDelivery
 */
class UpdateFunctionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     target?: Shapes\FunctionTarget|null,
     *     requestExpression?: string|null,
     *     responseExpression?: string|null,
     *     description?: string|null,
     *     eventBridgeDelivery?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
