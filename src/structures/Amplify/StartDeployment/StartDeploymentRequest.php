<?php

namespace Sunaoka\Aws\Structures\Amplify\StartDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $jobId
 * @property string $sourceUrl
 * @property 'ZIP'|'BUCKET_PREFIX' $sourceUrlType
 */
class StartDeploymentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     jobId?: string,
     *     sourceUrl?: string,
     *     sourceUrlType?: 'ZIP'|'BUCKET_PREFIX'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
