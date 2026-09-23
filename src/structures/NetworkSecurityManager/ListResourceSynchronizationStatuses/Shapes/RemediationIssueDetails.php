<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $issueType
 * @property string|null $message
 * @property string|null $correctiveAction
 */
class RemediationIssueDetails extends Shape
{
    /**
     * @param array{
     *     issueType?: string|null,
     *     message?: string|null,
     *     correctiveAction?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
