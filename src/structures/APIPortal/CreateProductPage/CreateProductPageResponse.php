<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProductPage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $productPageId
 * @property string $productPageArn
 * @property Shapes\DisplayContent|null $displayContent
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 */
class CreateProductPageResponse extends Response
{
}
