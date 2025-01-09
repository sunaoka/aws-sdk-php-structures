<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespaceArn
 * @property string $namespaceName
 * @property \Aws\Api\DateTimeResult $recoveryPointCreateTime
 * @property string $recoveryPointId
 * @property double $totalSizeInMegaBytes
 * @property string $workgroupName
 */
class RecoveryPoint extends Shape
{
    /**
     * @param array{
     *     namespaceArn?: string,
     *     namespaceName?: string,
     *     recoveryPointCreateTime?: \Aws\Api\DateTimeResult,
     *     recoveryPointId?: string,
     *     totalSizeInMegaBytes?: double,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
