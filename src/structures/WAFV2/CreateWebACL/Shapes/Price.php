<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Amount
 * @property 'USDC' $Currency
 */
class Price extends Shape
{
    /**
     * @param array{
     *     Amount: string,
     *     Currency: 'USDC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
