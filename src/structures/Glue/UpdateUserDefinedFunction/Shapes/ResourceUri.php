<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAR'|'FILE'|'ARCHIVE'|null $ResourceType
 * @property string|null $Uri
 */
class ResourceUri extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'JAR'|'FILE'|'ARCHIVE'|null,
     *     Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
