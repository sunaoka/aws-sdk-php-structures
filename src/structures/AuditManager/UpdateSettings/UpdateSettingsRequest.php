<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snsTopic
 * @property Shapes\AssessmentReportsDestination $defaultAssessmentReportsDestination
 * @property list<Shapes\Role> $defaultProcessOwners
 * @property string $kmsKey
 * @property bool $evidenceFinderEnabled
 * @property Shapes\DeregistrationPolicy $deregistrationPolicy
 * @property Shapes\DefaultExportDestination $defaultExportDestination
 */
class UpdateSettingsRequest extends Request
{
    /**
     * @param array{
     *     snsTopic?: string,
     *     defaultAssessmentReportsDestination?: Shapes\AssessmentReportsDestination,
     *     defaultProcessOwners?: list<Shapes\Role>,
     *     kmsKey?: string,
     *     evidenceFinderEnabled?: bool,
     *     deregistrationPolicy?: Shapes\DeregistrationPolicy,
     *     defaultExportDestination?: Shapes\DefaultExportDestination
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
