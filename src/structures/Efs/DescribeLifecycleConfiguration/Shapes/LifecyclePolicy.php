<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AFTER_7_DAYS'|'AFTER_14_DAYS'|'AFTER_30_DAYS'|'AFTER_60_DAYS'|'AFTER_90_DAYS'|'AFTER_1_DAY'|'AFTER_180_DAYS'|'AFTER_270_DAYS'|'AFTER_365_DAYS' $TransitionToIA
 * @property 'AFTER_1_ACCESS' $TransitionToPrimaryStorageClass
 * @property 'AFTER_1_DAY'|'AFTER_7_DAYS'|'AFTER_14_DAYS'|'AFTER_30_DAYS'|'AFTER_60_DAYS'|'AFTER_90_DAYS'|'AFTER_180_DAYS'|'AFTER_270_DAYS'|'AFTER_365_DAYS' $TransitionToArchive
 */
class LifecyclePolicy extends Shape
{
    /**
     * @param array{
     *     TransitionToIA?: 'AFTER_7_DAYS'|'AFTER_14_DAYS'|'AFTER_30_DAYS'|'AFTER_60_DAYS'|'AFTER_90_DAYS'|'AFTER_1_DAY'|'AFTER_180_DAYS'|'AFTER_270_DAYS'|'AFTER_365_DAYS',
     *     TransitionToPrimaryStorageClass?: 'AFTER_1_ACCESS',
     *     TransitionToArchive?: 'AFTER_1_DAY'|'AFTER_7_DAYS'|'AFTER_14_DAYS'|'AFTER_30_DAYS'|'AFTER_60_DAYS'|'AFTER_90_DAYS'|'AFTER_180_DAYS'|'AFTER_270_DAYS'|'AFTER_365_DAYS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
