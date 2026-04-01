<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInsightDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'text'|'metric' $Type
 * @property string $Value
 */
class InsightField extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'text'|'metric',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
