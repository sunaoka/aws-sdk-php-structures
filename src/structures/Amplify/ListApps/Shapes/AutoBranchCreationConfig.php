<?php

namespace Sunaoka\Aws\Structures\Amplify\ListApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST' $stage
 * @property string $framework
 * @property bool $enableAutoBuild
 * @property array<string, string> $environmentVariables
 * @property string $basicAuthCredentials
 * @property bool $enableBasicAuth
 * @property bool $enablePerformanceMode
 * @property string $buildSpec
 * @property bool $enablePullRequestPreview
 * @property string $pullRequestEnvironmentName
 */
class AutoBranchCreationConfig extends Shape
{
    /**
     * @param array{
     *     stage?: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST',
     *     framework?: string,
     *     enableAutoBuild?: bool,
     *     environmentVariables?: array<string, string>,
     *     basicAuthCredentials?: string,
     *     enableBasicAuth?: bool,
     *     enablePerformanceMode?: bool,
     *     buildSpec?: string,
     *     enablePullRequestPreview?: bool,
     *     pullRequestEnvironmentName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
