<?php

namespace Sunaoka\Aws\Structures\MPA\StartApprovalTeamBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string>|null $ApproverIds
 */
class StartApprovalTeamBaselineRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ApproverIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
