<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE' $type
 * @property string|null $location
 * @property int<0, max>|null $gitCloneDepth
 * @property GitSubmodulesConfig|null $gitSubmodulesConfig
 * @property string|null $buildspec
 * @property SourceAuth|null $auth
 * @property bool|null $reportBuildStatus
 * @property BuildStatusConfig|null $buildStatusConfig
 * @property bool|null $insecureSsl
 * @property string|null $sourceIdentifier
 */
class ProjectSource extends Shape
{
    /**
     * @param array{
     *     type: 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE',
     *     location?: string|null,
     *     gitCloneDepth?: int<0, max>|null,
     *     gitSubmodulesConfig?: GitSubmodulesConfig|null,
     *     buildspec?: string|null,
     *     auth?: SourceAuth|null,
     *     reportBuildStatus?: bool|null,
     *     buildStatusConfig?: BuildStatusConfig|null,
     *     insecureSsl?: bool|null,
     *     sourceIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
