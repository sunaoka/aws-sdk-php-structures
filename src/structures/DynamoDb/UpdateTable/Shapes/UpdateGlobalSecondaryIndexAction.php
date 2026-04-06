<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property OnDemandThroughput|null $OnDemandThroughput
 * @property WarmThroughput|null $WarmThroughput
 */
class UpdateGlobalSecondaryIndexAction extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     OnDemandThroughput?: OnDemandThroughput|null,
     *     WarmThroughput?: WarmThroughput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
