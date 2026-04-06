<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ListProductPages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $PageTitle
 * @property string $ProductPageArn
 * @property string $ProductPageId
 */
class ProductPageSummaryNoBody extends Shape
{
    /**
     * @param array{
     *     LastModified: \Aws\Api\DateTimeResult,
     *     PageTitle: string,
     *     ProductPageArn: string,
     *     ProductPageId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
