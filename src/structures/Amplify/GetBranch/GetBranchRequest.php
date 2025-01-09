<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 */
class GetBranchRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
