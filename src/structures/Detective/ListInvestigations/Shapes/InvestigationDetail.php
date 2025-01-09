<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InvestigationId
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $Severity
 * @property 'RUNNING'|'FAILED'|'SUCCESSFUL' $Status
 * @property 'ACTIVE'|'ARCHIVED' $State
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $EntityArn
 * @property 'IAM_ROLE'|'IAM_USER' $EntityType
 */
class InvestigationDetail extends Shape
{
    /**
     * @param array{
     *     InvestigationId?: string,
     *     Severity?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL',
     *     Status?: 'RUNNING'|'FAILED'|'SUCCESSFUL',
     *     State?: 'ACTIVE'|'ARCHIVED',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     EntityArn?: string,
     *     EntityType?: 'IAM_ROLE'|'IAM_USER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
