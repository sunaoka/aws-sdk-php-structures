<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $description
 * @property string $framework
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST' $stage
 * @property bool $enableNotification
 * @property bool $enableAutoBuild
 * @property array<string, string> $environmentVariables
 * @property string $basicAuthCredentials
 * @property bool $enableBasicAuth
 * @property bool $enablePerformanceMode
 * @property string $buildSpec
 * @property string $ttl
 * @property string $displayName
 * @property bool $enablePullRequestPreview
 * @property string $pullRequestEnvironmentName
 * @property string $backendEnvironmentArn
 * @property Shapes\Backend $backend
 */
class UpdateBranchRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     description?: string,
     *     framework?: string,
     *     stage?: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST',
     *     enableNotification?: bool,
     *     enableAutoBuild?: bool,
     *     environmentVariables?: array<string, string>,
     *     basicAuthCredentials?: string,
     *     enableBasicAuth?: bool,
     *     enablePerformanceMode?: bool,
     *     buildSpec?: string,
     *     ttl?: string,
     *     displayName?: string,
     *     enablePullRequestPreview?: bool,
     *     pullRequestEnvironmentName?: string,
     *     backendEnvironmentArn?: string,
     *     backend?: Shapes\Backend
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
