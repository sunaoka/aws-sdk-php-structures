<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductApiPage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $productApiPageId
 * @property string $productApiPageArn
 * @property Shapes\ApiId $apiId
 * @property Shapes\ApiPageDisplayContentResponse $displayContent
 * @property 'ENABLED'|'DISABLED' $tryItState
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'AVAILABLE'|'IN_PROGRESS'|'FAILED' $status
 * @property string|null $rawDisplayContent
 * @property Shapes\ProductApiPageStatusException|null $statusException
 * @property array<string, string>|null $tags
 */
class GetProductApiPageResponse extends Response
{
}
