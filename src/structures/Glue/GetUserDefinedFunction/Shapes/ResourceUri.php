<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAR'|'FILE'|'ARCHIVE' $ResourceType
 * @property string $Uri
 */
class ResourceUri extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'JAR'|'FILE'|'ARCHIVE',
     *     Uri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
