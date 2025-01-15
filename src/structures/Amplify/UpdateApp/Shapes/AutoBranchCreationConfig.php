<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST'|null $stage
 * @property string|null $framework
 * @property bool|null $enableAutoBuild
 * @property array<string, string>|null $environmentVariables
 * @property string|null $basicAuthCredentials
 * @property bool|null $enableBasicAuth
 * @property bool|null $enablePerformanceMode
 * @property string|null $buildSpec
 * @property bool|null $enablePullRequestPreview
 * @property string|null $pullRequestEnvironmentName
 */
class AutoBranchCreationConfig extends Shape
{
    /**
     * @param array{
     *     stage?: 'PRODUCTION'|'BETA'|'DEVELOPMENT'|'EXPERIMENTAL'|'PULL_REQUEST'|null,
     *     framework?: string|null,
     *     enableAutoBuild?: bool|null,
     *     environmentVariables?: array<string, string>|null,
     *     basicAuthCredentials?: string|null,
     *     enableBasicAuth?: bool|null,
     *     enablePerformanceMode?: bool|null,
     *     buildSpec?: string|null,
     *     enablePullRequestPreview?: bool|null,
     *     pullRequestEnvironmentName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
