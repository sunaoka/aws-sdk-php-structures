<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchExportFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $pentestJobId
 * @property string|null $codeReviewJobId
 * @property Shapes\IssueDestination $issueDestination
 * @property list<string> $findingIds
 */
class BatchExportFindingsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     pentestJobId?: string|null,
     *     codeReviewJobId?: string|null,
     *     issueDestination: Shapes\IssueDestination,
     *     findingIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
