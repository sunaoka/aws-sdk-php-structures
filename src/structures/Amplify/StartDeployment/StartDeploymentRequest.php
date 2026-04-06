<?php

namespace Sunaoka\Aws\Structures\Amplify\StartDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string|null $jobId
 * @property string|null $sourceUrl
 * @property 'ZIP'|'BUCKET_PREFIX'|null $sourceUrlType
 */
class StartDeploymentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId?: string|null,
     *     sourceUrl?: string|null,
     *     sourceUrlType?: 'ZIP'|'BUCKET_PREFIX'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
