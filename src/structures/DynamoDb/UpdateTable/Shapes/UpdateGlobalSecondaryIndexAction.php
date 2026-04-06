<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property ProvisionedThroughput $ProvisionedThroughput
 */
class UpdateGlobalSecondaryIndexAction extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedThroughput: ProvisionedThroughput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
