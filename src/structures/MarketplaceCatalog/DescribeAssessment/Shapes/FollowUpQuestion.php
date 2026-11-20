<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Question
 * @property string $Justification
 */
class FollowUpQuestion extends Shape
{
    /**
     * @param array{
     *     Question: string,
     *     Justification: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
