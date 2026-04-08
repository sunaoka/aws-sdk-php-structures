<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string|null $resourceArn
 * @property string $resourceType
 * @property string $dataClassification
 */
class DataArtifact extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     resourceArn?: string|null,
     *     resourceType: string,
     *     dataClassification: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
