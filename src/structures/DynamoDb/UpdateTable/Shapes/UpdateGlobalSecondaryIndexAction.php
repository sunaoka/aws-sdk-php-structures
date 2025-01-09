<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property OnDemandThroughput $OnDemandThroughput
 * @property WarmThroughput $WarmThroughput
 */
class UpdateGlobalSecondaryIndexAction extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     OnDemandThroughput?: OnDemandThroughput,
     *     WarmThroughput?: WarmThroughput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
