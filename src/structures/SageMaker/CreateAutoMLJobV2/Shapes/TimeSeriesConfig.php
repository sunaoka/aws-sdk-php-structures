<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetAttributeName
 * @property string $TimestampAttributeName
 * @property string $ItemIdentifierAttributeName
 * @property list<string> $GroupingAttributeNames
 */
class TimeSeriesConfig extends Shape
{
    /**
     * @param array{
     *     TargetAttributeName: string,
     *     TimestampAttributeName: string,
     *     ItemIdentifierAttributeName: string,
     *     GroupingAttributeNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
