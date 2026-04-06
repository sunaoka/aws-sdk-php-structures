<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InvestigationId
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Severity
 * @property 'RUNNING'|'FAILED'|'SUCCESSFUL'|null $Status
 * @property 'ACTIVE'|'ARCHIVED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $EntityArn
 * @property 'IAM_ROLE'|'IAM_USER'|null $EntityType
 */
class InvestigationDetail extends Shape
{
    /**
     * @param array{
     *     InvestigationId?: string|null,
     *     Severity?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     Status?: 'RUNNING'|'FAILED'|'SUCCESSFUL'|null,
     *     State?: 'ACTIVE'|'ARCHIVED'|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     EntityArn?: string|null,
     *     EntityType?: 'IAM_ROLE'|'IAM_USER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
