<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListAssociatedApprovalRuleTemplatesForRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAssociatedApprovalRuleTemplatesForRepositoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
