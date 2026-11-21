<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $productId
 * @property string $productArn
 * @property string $displayName
 * @property Shapes\DisplayOrder|null $displayOrder
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property Shapes\ApiSelectionConfiguration|null $apiSelectionConfiguration
 * @property 'ACTIVE'|'IN_PROGRESS'|'FAILED'|null $status
 * @property 'API_PAGE_ATTACHED'|'EVALUATION_ERROR'|null $failureReason
 */
class UpdateProductResponse extends Response
{
}
