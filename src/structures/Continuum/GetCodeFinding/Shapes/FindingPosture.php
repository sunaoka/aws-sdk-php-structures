<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $application
 * @property string|null $applicationUid
 * @property string|null $applicationVersion
 * @property string|null $control
 * @property string|null $description
 * @property list<string>|null $standards
 * @property list<string>|null $requirements
 * @property list<FindingComplianceCheck>|null $checks
 * @property string|null $status
 * @property int|null $statusId
 * @property string|null $remediation
 * @property list<string>|null $remediationReferences
 */
class FindingPosture extends Shape
{
    /**
     * @param array{
     *     application?: string|null,
     *     applicationUid?: string|null,
     *     applicationVersion?: string|null,
     *     control?: string|null,
     *     description?: string|null,
     *     standards?: list<string>|null,
     *     requirements?: list<string>|null,
     *     checks?: list<FindingComplianceCheck>|null,
     *     status?: string|null,
     *     statusId?: int|null,
     *     remediation?: string|null,
     *     remediationReferences?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
