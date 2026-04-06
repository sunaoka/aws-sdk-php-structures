<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property string|null $Name
 * @property 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null $ShareStatus
 */
class ProfileSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     ShareStatus?: 'NOT_SHARED'|'SHARED_WITH_ME'|'SHARED_BY_ME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
