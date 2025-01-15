<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isAwsOrgEnabled
 * @property string|null $snsTopic
 * @property AssessmentReportsDestination|null $defaultAssessmentReportsDestination
 * @property list<Role>|null $defaultProcessOwners
 * @property string|null $kmsKey
 * @property EvidenceFinderEnablement|null $evidenceFinderEnablement
 * @property DeregistrationPolicy|null $deregistrationPolicy
 * @property DefaultExportDestination|null $defaultExportDestination
 */
class Settings extends Shape
{
    /**
     * @param array{
     *     isAwsOrgEnabled?: bool|null,
     *     snsTopic?: string|null,
     *     defaultAssessmentReportsDestination?: AssessmentReportsDestination|null,
     *     defaultProcessOwners?: list<Role>|null,
     *     kmsKey?: string|null,
     *     evidenceFinderEnablement?: EvidenceFinderEnablement|null,
     *     deregistrationPolicy?: DeregistrationPolicy|null,
     *     defaultExportDestination?: DefaultExportDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
