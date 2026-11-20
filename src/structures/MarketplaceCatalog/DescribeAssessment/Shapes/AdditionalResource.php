<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Text
 * @property string $Url
 */
class AdditionalResource extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Text: string,
     *     Url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
