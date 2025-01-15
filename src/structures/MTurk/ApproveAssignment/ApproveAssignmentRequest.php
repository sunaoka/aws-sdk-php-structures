<?php

namespace Sunaoka\Aws\Structures\MTurk\ApproveAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssignmentId
 * @property string|null $RequesterFeedback
 * @property bool|null $OverrideRejection
 */
class ApproveAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AssignmentId: string,
     *     RequesterFeedback?: string|null,
     *     OverrideRejection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
