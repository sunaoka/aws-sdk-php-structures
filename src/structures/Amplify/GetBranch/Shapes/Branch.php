<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBranch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branchArn
 * @property string $branchName
 * @property string $description
 * @property array<string, string> $tags
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST' $stage
 * @property string $displayName
 * @property bool $enableNotification
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string> $environmentVariables
 * @property bool $enableAutoBuild
 * @property list<string> $customDomains
 * @property string $framework
 * @property string $activeJobId
 * @property string $totalNumberOfJobs
 * @property bool $enableBasicAuth
 * @property bool $enablePerformanceMode
 * @property string $thumbnailUrl
 * @property string $basicAuthCredentials
 * @property string $buildSpec
 * @property string $ttl
 * @property list<string> $associatedResources
 * @property bool $enablePullRequestPreview
 * @property string $pullRequestEnvironmentName
 * @property string $destinationBranch
 * @property string $sourceBranch
 * @property string $backendEnvironmentArn
 * @property Backend $backend
 */
class Branch extends Shape
{
    /**
     * @param array{
     *     branchArn: string,
     *     branchName: string,
     *     description: string,
     *     tags?: array<string, string>,
     *     stage: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST',
     *     displayName: string,
     *     enableNotification: bool,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     environmentVariables: array<string, string>,
     *     enableAutoBuild: bool,
     *     customDomains: list<string>,
     *     framework: string,
     *     activeJobId: string,
     *     totalNumberOfJobs: string,
     *     enableBasicAuth: bool,
     *     enablePerformanceMode?: bool,
     *     thumbnailUrl?: string,
     *     basicAuthCredentials?: string,
     *     buildSpec?: string,
     *     ttl: string,
     *     associatedResources?: list<string>,
     *     enablePullRequestPreview: bool,
     *     pullRequestEnvironmentName?: string,
     *     destinationBranch?: string,
     *     sourceBranch?: string,
     *     backendEnvironmentArn?: string,
     *     backend?: Backend
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
