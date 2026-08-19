<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property NamespaceKeyValidation|null $validation
 */
class NamespaceKeyEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     validation?: NamespaceKeyValidation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
