<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContinuousBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ContinuousBackupsStatus
 * @property PointInTimeRecoveryDescription $PointInTimeRecoveryDescription
 */
class ContinuousBackupsDescription extends Shape
{
    /**
     * @param array{
     *     ContinuousBackupsStatus: 'ENABLED'|'DISABLED',
     *     PointInTimeRecoveryDescription?: PointInTimeRecoveryDescription
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
