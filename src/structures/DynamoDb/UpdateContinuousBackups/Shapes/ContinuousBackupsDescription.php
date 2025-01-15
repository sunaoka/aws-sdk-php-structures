<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContinuousBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $ContinuousBackupsStatus
 * @property PointInTimeRecoveryDescription|null $PointInTimeRecoveryDescription
 */
class ContinuousBackupsDescription extends Shape
{
    /**
     * @param array{
     *     ContinuousBackupsStatus: 'ENABLED'|'DISABLED',
     *     PointInTimeRecoveryDescription?: PointInTimeRecoveryDescription|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
