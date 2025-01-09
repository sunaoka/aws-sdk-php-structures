<?php

namespace Sunaoka\Aws\Structures\AppRegistry\UpdateAttributeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property array<string, string> $tags
 */
class AttributeGroup extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
