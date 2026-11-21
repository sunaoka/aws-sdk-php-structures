<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductApiPages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productApiPageId
 * @property string $productApiPageArn
 * @property ApiId $apiId
 * @property string|null $operationName
 * @property string $apiUrl
 * @property 'ENABLED'|'DISABLED' $tryItState
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'AVAILABLE'|'IN_PROGRESS'|'FAILED' $status
 * @property ProductApiPageStatusException|null $statusException
 */
class ProductApiPageSummaryNoBody extends Shape
{
    /**
     * @param array{
     *     productApiPageId: string,
     *     productApiPageArn: string,
     *     apiId: ApiId,
     *     operationName?: string|null,
     *     apiUrl: string,
     *     tryItState: 'ENABLED'|'DISABLED',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'AVAILABLE'|'IN_PROGRESS'|'FAILED',
     *     statusException?: ProductApiPageStatusException|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
