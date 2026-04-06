<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeConsumableResource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $consumableResourceName
 * @property string $consumableResourceArn
 * @property int|null $totalQuantity
 * @property int|null $inUseQuantity
 * @property int|null $availableQuantity
 * @property string|null $resourceType
 * @property int|null $createdAt
 * @property array<string, string>|null $tags
 */
class DescribeConsumableResourceResponse extends Response
{
}
