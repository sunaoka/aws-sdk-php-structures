<?php

namespace Sunaoka\Aws\Structures\Emr\GetOnClusterAppUIPresignedURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property 'SparkHistoryServer'|'YarnTimelineService'|'TezUI'|'ApplicationMaster'|'JobHistoryServer'|'ResourceManager'|null $OnClusterAppUIType
 * @property string|null $ApplicationId
 * @property bool|null $DryRun
 * @property string|null $ExecutionRoleArn
 */
class GetOnClusterAppUIPresignedURLRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     OnClusterAppUIType?: 'SparkHistoryServer'|'YarnTimelineService'|'TezUI'|'ApplicationMaster'|'JobHistoryServer'|'ResourceManager'|null,
     *     ApplicationId?: string|null,
     *     DryRun?: bool|null,
     *     ExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
