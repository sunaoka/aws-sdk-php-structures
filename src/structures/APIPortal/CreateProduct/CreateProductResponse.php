<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $productId
 * @property string $productArn
 * @property string $displayName
 * @property Shapes\DisplayOrder|null $displayOrder
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 * @property Shapes\ApiSelectionConfiguration|null $apiSelectionConfiguration
 * @property 'ACTIVE'|'IN_PROGRESS'|'FAILED'|null $status
 * @property 'API_PAGE_ATTACHED'|'EVALUATION_ERROR'|null $failureReason
 */
class CreateProductResponse extends Response
{
}
