<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90' $rescanDuration
 * @property 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|null $pullDateRescanDuration
 * @property 'LAST_PULL_DATE'|'LAST_IN_USE_AT'|null $pullDateRescanMode
 */
class EcrConfiguration extends Shape
{
    /**
     * @param array{
     *     rescanDuration: 'LIFETIME'|'DAYS_30'|'DAYS_180'|'DAYS_14'|'DAYS_60'|'DAYS_90',
     *     pullDateRescanDuration?: 'DAYS_14'|'DAYS_30'|'DAYS_60'|'DAYS_90'|'DAYS_180'|null,
     *     pullDateRescanMode?: 'LAST_PULL_DATE'|'LAST_IN_USE_AT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
