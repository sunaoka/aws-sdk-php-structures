<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetAttributeName
 * @property string $TimestampAttributeName
 * @property string $ItemIdentifierAttributeName
 * @property list<string>|null $GroupingAttributeNames
 */
class TimeSeriesConfig extends Shape
{
    /**
     * @param array{
     *     TargetAttributeName: string,
     *     TimestampAttributeName: string,
     *     ItemIdentifierAttributeName: string,
     *     GroupingAttributeNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
