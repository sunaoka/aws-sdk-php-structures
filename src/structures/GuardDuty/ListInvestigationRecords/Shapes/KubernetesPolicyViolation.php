<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationType
 * @property string|null $AffectedResource
 * @property string|null $Subject
 * @property string|null $GrantedAccess
 * @property string|null $ExposureVector
 * @property string|null $MisconfigurationImpact
 */
class KubernetesPolicyViolation extends Shape
{
    /**
     * @param array{
     *     ViolationType?: string|null,
     *     AffectedResource?: string|null,
     *     Subject?: string|null,
     *     GrantedAccess?: string|null,
     *     ExposureVector?: string|null,
     *     MisconfigurationImpact?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
