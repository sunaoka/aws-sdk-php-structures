<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessKeyId
 * @property string|null $PrincipalId
 * @property string|null $UserName
 * @property string|null $UserType
 * @property string|null $UserAgent
 */
class InvestigationActor extends Shape
{
    /**
     * @param array{
     *     AccessKeyId?: string|null,
     *     PrincipalId?: string|null,
     *     UserName?: string|null,
     *     UserType?: string|null,
     *     UserAgent?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
