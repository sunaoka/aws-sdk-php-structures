<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortalProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Section>|null $Contents
 * @property string|null $OverviewPageArn
 * @property list<string>|null $ProductPageArns
 */
class DisplayOrder extends Shape
{
    /**
     * @param array{
     *     Contents?: list<Section>|null,
     *     OverviewPageArn?: string|null,
     *     ProductPageArns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
