<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListAssociatedApprovalRuleTemplatesForRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssociatedApprovalRuleTemplatesForRepositoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
