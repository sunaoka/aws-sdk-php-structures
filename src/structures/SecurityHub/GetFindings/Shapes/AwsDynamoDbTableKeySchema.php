<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttributeName
 * @property string|null $KeyType
 */
class AwsDynamoDbTableKeySchema extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string|null,
     *     KeyType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
