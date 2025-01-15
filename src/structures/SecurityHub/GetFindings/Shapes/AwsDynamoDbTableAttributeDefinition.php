<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property string|null $AttributeType
 */
class AwsDynamoDbTableAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     AttributeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
