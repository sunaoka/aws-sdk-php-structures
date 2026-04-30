<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'STRING'|'STRINGLIST'|'NUMBER' $type
 */
class IndexedKey extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     type: 'STRING'|'STRINGLIST'|'NUMBER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
