<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $AttributeType
 */
class AwsDynamoDbTableAttributeDefinition extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     AttributeType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
