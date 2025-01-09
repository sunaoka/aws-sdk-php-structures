<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateFindingsFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property list<string> $FindingIds
 * @property 'USEFUL'|'NOT_USEFUL' $Feedback
 * @property string $Comments
 */
class UpdateFindingsFeedbackRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     FindingIds: list<string>,
     *     Feedback: 'USEFUL'|'NOT_USEFUL',
     *     Comments?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
