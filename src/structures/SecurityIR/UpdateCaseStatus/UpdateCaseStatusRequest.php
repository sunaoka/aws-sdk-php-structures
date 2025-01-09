<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateCaseStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property 'Submitted'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities' $caseStatus
 */
class UpdateCaseStatusRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     caseStatus: 'Submitted'|'Detection and Analysis'|'Containment, Eradication and Recovery'|'Post-incident Activities'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
