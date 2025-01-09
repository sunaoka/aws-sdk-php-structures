<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $branchName
 * @property string $description
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST' $stage
 * @property string $framework
 * @property bool $enableNotification
 * @property bool $enableAutoBuild
 * @property array<string, string> $environmentVariables
 * @property string $basicAuthCredentials
 * @property bool $enableBasicAuth
 * @property bool $enablePerformanceMode
 * @property array<string, string> $tags
 * @property string $buildSpec
 * @property string $ttl
 * @property string $displayName
 * @property bool $enablePullRequestPreview
 * @property string $pullRequestEnvironmentName
 * @property string $backendEnvironmentArn
 * @property Shapes\Backend $backend
 */
class CreateBranchRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     branchName: string,
     *     description?: string,
     *     stage?: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST',
     *     framework?: string,
     *     enableNotification?: bool,
     *     enableAutoBuild?: bool,
     *     environmentVariables?: array<string, string>,
     *     basicAuthCredentials?: string,
     *     enableBasicAuth?: bool,
     *     enablePerformanceMode?: bool,
     *     tags?: array<string, string>,
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
