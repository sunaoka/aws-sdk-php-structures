<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90'|'DAYS_3'|'DAYS_7' $rescanDuration
 * @property 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|'DAYS_3'|'DAYS_7'|null $pullDateRescanDuration
 * @property 'LAST_PULL_DATE'|'LAST_IN_USE_AT'|null $pullDateRescanMode
 */
class EcrConfiguration extends Shape
{
    /**
     * @param array{
     *     rescanDuration: 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90'|'DAYS_3'|'DAYS_7',
     *     pullDateRescanDuration?: 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|'DAYS_3'|'DAYS_7'|null,
     *     pullDateRescanMode?: 'LAST_PULL_DATE'|'LAST_IN_USE_AT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
