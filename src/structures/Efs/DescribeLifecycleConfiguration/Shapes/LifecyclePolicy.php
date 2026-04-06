<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AFTER_7_DAYS'|'AFTER_14_DAYS'|'AFTER_30_DAYS'|'AFTER_60_DAYS'|'AFTER_90_DAYS'|'AFTER_1_DAY'|null $TransitionToIA
 * @property 'AFTER_1_ACCESS'|null $TransitionToPrimaryStorageClass
 */
class LifecyclePolicy extends Shape
{
    /**
     * @param array{
     *     TransitionToIA?: 'AFTER_7_DAYS'|'AFTER_14_DAYS'|'AFTER_30_DAYS'|'AFTER_60_DAYS'|'AFTER_90_DAYS'|'AFTER_1_DAY'|null,
     *     TransitionToPrimaryStorageClass?: 'AFTER_1_ACCESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
