<?php

namespace Sunaoka\Aws\Structures\Amplify\StartDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string|null $jobId
 * @property string|null $sourceUrl
 */
class StartDeploymentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId?: string|null,
     *     sourceUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
