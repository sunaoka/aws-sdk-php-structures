<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $overviewPageArn
 * @property list<string>|null $productPageArns
 * @property list<Section>|null $contents
 */
class DisplayOrder extends Shape
{
    /**
     * @param array{
     *     overviewPageArn?: string|null,
     *     productPageArns?: list<string>|null,
     *     contents?: list<Section>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
