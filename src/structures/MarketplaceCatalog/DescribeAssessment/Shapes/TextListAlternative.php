<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Value
 * @property string $Rationale
 */
class TextListAlternative extends Shape
{
    /**
     * @param array{
     *     Value: list<string>,
     *     Rationale: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
