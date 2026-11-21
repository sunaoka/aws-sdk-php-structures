<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListProductPages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productPageId
 * @property string $productPageArn
 * @property string $pageTitle
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ProductPageSummaryNoBody extends Shape
{
    /**
     * @param array{
     *     productPageId: string,
     *     productPageArn: string,
     *     pageTitle: string,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
