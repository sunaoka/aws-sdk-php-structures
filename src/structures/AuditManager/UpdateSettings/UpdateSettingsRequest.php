<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $snsTopic
 * @property Shapes\AssessmentReportsDestination|null $defaultAssessmentReportsDestination
 * @property list<Shapes\Role>|null $defaultProcessOwners
 * @property string|null $kmsKey
 * @property bool|null $evidenceFinderEnabled
 * @property Shapes\DeregistrationPolicy|null $deregistrationPolicy
 * @property Shapes\DefaultExportDestination|null $defaultExportDestination
 */
class UpdateSettingsRequest extends Request
{
    /**
     * @param array{
     *     snsTopic?: string|null,
     *     defaultAssessmentReportsDestination?: Shapes\AssessmentReportsDestination|null,
     *     defaultProcessOwners?: list<Shapes\Role>|null,
     *     kmsKey?: string|null,
     *     evidenceFinderEnabled?: bool|null,
     *     deregistrationPolicy?: Shapes\DeregistrationPolicy|null,
     *     defaultExportDestination?: Shapes\DefaultExportDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
