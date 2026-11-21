<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productId
 * @property string $productArn
 * @property string $displayName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property ApiSelectionConfiguration|null $apiSelectionConfiguration
 * @property 'ACTIVE'|'IN_PROGRESS'|'FAILED'|null $status
 * @property 'API_PAGE_ATTACHED'|'EVALUATION_ERROR'|null $failureReason
 */
class ProductSummary extends Shape
{
    /**
     * @param array{
     *     productId: string,
     *     productArn: string,
     *     displayName: string,
     *     description: string,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     apiSelectionConfiguration?: ApiSelectionConfiguration|null,
     *     status?: 'ACTIVE'|'IN_PROGRESS'|'FAILED'|null,
     *     failureReason?: 'API_PAGE_ATTACHED'|'EVALUATION_ERROR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
