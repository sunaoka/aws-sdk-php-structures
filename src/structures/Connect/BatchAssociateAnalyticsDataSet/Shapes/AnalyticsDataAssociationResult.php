<?php

namespace Sunaoka\Aws\Structures\Connect\BatchAssociateAnalyticsDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSetId
 * @property string $TargetAccountId
 * @property string $ResourceShareId
 * @property string $ResourceShareArn
 */
class AnalyticsDataAssociationResult extends Shape
{
    /**
     * @param array{
     *     DataSetId?: string,
     *     TargetAccountId?: string,
     *     ResourceShareId?: string,
     *     ResourceShareArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
