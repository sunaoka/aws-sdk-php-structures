<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string|null $description
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST'|null $stage
 * @property string|null $framework
 * @property bool|null $enableNotification
 * @property bool|null $enableAutoBuild
 * @property array<string, string>|null $environmentVariables
 * @property string|null $basicAuthCredentials
 * @property bool|null $enableBasicAuth
 * @property bool|null $enablePerformanceMode
 * @property array<string, string>|null $tags
 * @property string|null $buildSpec
 * @property string|null $ttl
 * @property string|null $displayName
 * @property bool|null $enablePullRequestPreview
 * @property string|null $pullRequestEnvironmentName
 * @property string|null $backendEnvironmentArn
 * @property Shapes\Backend|null $backend
 */
class CreateBranchRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     description?: string|null,
     *     stage?: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST'|null,
     *     framework?: string|null,
     *     enableNotification?: bool|null,
     *     enableAutoBuild?: bool|null,
     *     environmentVariables?: array<string, string>|null,
     *     basicAuthCredentials?: string|null,
     *     enableBasicAuth?: bool|null,
     *     enablePerformanceMode?: bool|null,
     *     tags?: array<string, string>|null,
     *     buildSpec?: string|null,
     *     ttl?: string|null,
     *     displayName?: string|null,
     *     enablePullRequestPreview?: bool|null,
     *     pullRequestEnvironmentName?: string|null,
     *     backendEnvironmentArn?: string|null,
     *     backend?: Shapes\Backend|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
