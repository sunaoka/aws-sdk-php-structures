<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingSubtype
 * @property string|null $EffectivePermission
 * @property string|null $BlockPublicAccessSettings
 * @property string|null $Exposure
 * @property string|null $UserAgent
 * @property string|null $UserAgentClassification
 * @property string|null $SourceIp
 * @property string|null $IpReputation
 * @property string|null $ActorAssessment
 * @property string|null $S3ApiActivity
 * @property string|null $SourceContext
 * @property string|null $AuthorizationAssessment
 */
class S3Analysis extends Shape
{
    /**
     * @param array{
     *     FindingSubtype?: string|null,
     *     EffectivePermission?: string|null,
     *     BlockPublicAccessSettings?: string|null,
     *     Exposure?: string|null,
     *     UserAgent?: string|null,
     *     UserAgentClassification?: string|null,
     *     SourceIp?: string|null,
     *     IpReputation?: string|null,
     *     ActorAssessment?: string|null,
     *     S3ApiActivity?: string|null,
     *     SourceContext?: string|null,
     *     AuthorizationAssessment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
