<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListRecoveryPoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespaceArn
 * @property string|null $namespaceName
 * @property \Aws\Api\DateTimeResult|null $recoveryPointCreateTime
 * @property string|null $recoveryPointId
 * @property double|null $totalSizeInMegaBytes
 * @property string|null $workgroupName
 */
class RecoveryPoint extends Shape
{
    /**
     * @param array{
     *     namespaceArn?: string|null,
     *     namespaceName?: string|null,
     *     recoveryPointCreateTime?: \Aws\Api\DateTimeResult|null,
     *     recoveryPointId?: string|null,
     *     totalSizeInMegaBytes?: double|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
