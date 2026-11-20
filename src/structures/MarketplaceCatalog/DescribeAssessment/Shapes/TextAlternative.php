<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string $Rationale
 */
class TextAlternative extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
