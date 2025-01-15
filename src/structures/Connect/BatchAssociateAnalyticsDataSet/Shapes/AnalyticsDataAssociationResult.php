<?php

namespace Sunaoka\Aws\Structures\Connect\BatchAssociateAnalyticsDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataSetId
 * @property string|null $TargetAccountId
 * @property string|null $ResourceShareId
 * @property string|null $ResourceShareArn
 */
class AnalyticsDataAssociationResult extends Shape
{
    /**
     * @param array{
     *     DataSetId?: string|null,
     *     TargetAccountId?: string|null,
     *     ResourceShareId?: string|null,
     *     ResourceShareArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
