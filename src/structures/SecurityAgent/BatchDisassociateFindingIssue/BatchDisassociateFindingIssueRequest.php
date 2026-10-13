<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDisassociateFindingIssue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $pentestJobId
 * @property string|null $codeReviewJobId
 * @property list<string> $findingIds
 */
class BatchDisassociateFindingIssueRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     pentestJobId?: string|null,
     *     codeReviewJobId?: string|null,
     *     findingIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
