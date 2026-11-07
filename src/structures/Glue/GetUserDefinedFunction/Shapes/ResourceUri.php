<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAR'|'FILE'|'ARCHIVE'|null $ResourceType
 * @property string|null $Uri
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class ResourceUri extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'JAR'|'FILE'|'ARCHIVE'|null,
     *     Uri?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
