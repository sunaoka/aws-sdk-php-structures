<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductPage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $productPageId
 * @property string $productPageArn
 * @property Shapes\DisplayContent $displayContent
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 */
class GetProductPageResponse extends Response
{
}
