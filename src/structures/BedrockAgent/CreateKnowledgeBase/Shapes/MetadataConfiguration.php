<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STRING'|'STRING_LIST' $type
 * @property 'ENABLED'|'DISABLED' $searchability
 */
class MetadataConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'STRING'|'STRING_LIST',
     *     searchability: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
