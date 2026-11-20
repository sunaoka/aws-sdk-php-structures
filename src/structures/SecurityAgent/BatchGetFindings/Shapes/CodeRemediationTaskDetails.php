<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repoName
 * @property string|null $codeDiffLink
 * @property string|null $pullRequestLink
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'NO_CHANGE_REQUIRED'|'UNKNOWN'|null $status
 * @property string|null $statusCode
 * @property string|null $statusReason
 */
class CodeRemediationTaskDetails extends Shape
{
    /**
     * @param array{
     *     repoName?: string|null,
     *     codeDiffLink?: string|null,
     *     pullRequestLink?: string|null,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'NO_CHANGE_REQUIRED'|'UNKNOWN'|null,
     *     statusCode?: string|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
