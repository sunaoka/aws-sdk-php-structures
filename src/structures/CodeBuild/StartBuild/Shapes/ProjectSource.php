<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StartBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE' $type
 * @property string $location
 * @property int<0, max> $gitCloneDepth
 * @property GitSubmodulesConfig $gitSubmodulesConfig
 * @property string $buildspec
 * @property SourceAuth $auth
 * @property bool $reportBuildStatus
 * @property BuildStatusConfig $buildStatusConfig
 * @property bool $insecureSsl
 * @property string $sourceIdentifier
 */
class ProjectSource extends Shape
{
    /**
     * @param array{
     *     type: 'CODECOMMIT'|'CODEPIPELINE'|'GITHUB'|'GITLAB'|'GITLAB_SELF_MANAGED'|'S3'|'BITBUCKET'|'GITHUB_ENTERPRISE'|'NO_SOURCE',
     *     location?: string,
     *     gitCloneDepth?: int<0, max>,
     *     gitSubmodulesConfig?: GitSubmodulesConfig,
     *     buildspec?: string,
     *     auth?: SourceAuth,
     *     reportBuildStatus?: bool,
     *     buildStatusConfig?: BuildStatusConfig,
     *     insecureSsl?: bool,
     *     sourceIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
