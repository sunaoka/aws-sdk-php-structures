<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'GitHub'|'String'|'AppSpecContent' $revisionType
 * @property S3Location $s3Location
 * @property GitHubLocation $gitHubLocation
 * @property RawString $string
 * @property AppSpecContent $appSpecContent
 */
class RevisionLocation extends Shape
{
    /**
     * @param array{
     *     revisionType?: 'S3'|'GitHub'|'String'|'AppSpecContent',
     *     s3Location?: S3Location,
     *     gitHubLocation?: GitHubLocation,
     *     string?: RawString,
     *     appSpecContent?: AppSpecContent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
