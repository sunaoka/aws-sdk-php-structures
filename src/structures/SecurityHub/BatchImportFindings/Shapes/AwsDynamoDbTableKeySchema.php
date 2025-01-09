<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property string $KeyType
 */
class AwsDynamoDbTableKeySchema extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     KeyType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
