<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isAwsOrgEnabled
 * @property string $snsTopic
 * @property AssessmentReportsDestination $defaultAssessmentReportsDestination
 * @property list<Role> $defaultProcessOwners
 * @property string $kmsKey
 * @property EvidenceFinderEnablement $evidenceFinderEnablement
 * @property DeregistrationPolicy $deregistrationPolicy
 * @property DefaultExportDestination $defaultExportDestination
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     isAwsOrgEnabled?: bool,
     *     snsTopic?: string,
     *     defaultAssessmentReportsDestination?: AssessmentReportsDestination,
     *     defaultProcessOwners?: list<Role>,
     *     kmsKey?: string,
     *     evidenceFinderEnablement?: EvidenceFinderEnablement,
     *     deregistrationPolicy?: DeregistrationPolicy,
     *     defaultExportDestination?: DefaultExportDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
