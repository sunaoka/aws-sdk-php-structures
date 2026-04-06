<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBranch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branchArn
 * @property string $branchName
 * @property string $description
 * @property array<string, string>|null $tags
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST' $stage
 * @property string $displayName
 * @property bool $enableNotification
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property array<string, string> $environmentVariables
 * @property bool $enableAutoBuild
 * @property bool|null $enableSkewProtection
 * @property list<string> $customDomains
 * @property string $framework
 * @property string $activeJobId
 * @property string $totalNumberOfJobs
 * @property bool $enableBasicAuth
 * @property bool|null $enablePerformanceMode
 * @property string|null $thumbnailUrl
 * @property string|null $basicAuthCredentials
 * @property string|null $buildSpec
 * @property string $ttl
 * @property list<string>|null $associatedResources
 * @property bool $enablePullRequestPreview
 * @property string|null $pullRequestEnvironmentName
 * @property string|null $destinationBranch
 * @property string|null $sourceBranch
 * @property string|null $backendEnvironmentArn
 * @property Backend|null $backend
 * @property string|null $computeRoleArn
 */
class Branch extends Shape
{
    /**
     * @param array{
     *     branchArn: string,
     *     branchName: string,
     *     description: string,
     *     tags?: array<string, string>|null,
     *     stage: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST',
     *     displayName: string,
     *     enableNotification: bool,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     environmentVariables: array<string, string>,
     *     enableAutoBuild: bool,
     *     enableSkewProtection?: bool|null,
     *     customDomains: list<string>,
     *     framework: string,
     *     activeJobId: string,
     *     totalNumberOfJobs: string,
     *     enableBasicAuth: bool,
     *     enablePerformanceMode?: bool|null,
     *     thumbnailUrl?: string|null,
     *     basicAuthCredentials?: string|null,
     *     buildSpec?: string|null,
     *     ttl: string,
     *     associatedResources?: list<string>|null,
     *     enablePullRequestPreview: bool,
     *     pullRequestEnvironmentName?: string|null,
     *     destinationBranch?: string|null,
     *     sourceBranch?: string|null,
     *     backendEnvironmentArn?: string|null,
     *     backend?: Backend|null,
     *     computeRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
