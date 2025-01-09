<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME' $ShareStatus
 */
class ProfileSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Id?: string,
     *     Name?: string,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
