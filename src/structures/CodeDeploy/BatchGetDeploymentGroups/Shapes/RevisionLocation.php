<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'GitHub'|'String'|'AppSpecContent'|null $revisionType
 * @property S3Location|null $s3Location
 * @property GitHubLocation|null $gitHubLocation
 * @property RawString|null $string
 * @property AppSpecContent|null $appSpecContent
 */
class RevisionLocation extends Shape
{
    /**
     * @param array{
     *     revisionType?: 'S3'|'GitHub'|'String'|'AppSpecContent'|null,
     *     s3Location?: S3Location|null,
     *     gitHubLocation?: GitHubLocation|null,
     *     string?: RawString|null,
     *     appSpecContent?: AppSpecContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
