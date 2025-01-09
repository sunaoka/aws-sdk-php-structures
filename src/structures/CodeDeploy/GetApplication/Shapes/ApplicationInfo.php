<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $applicationName
 * @property \Aws\Api\DateTimeResult $createTime
 * @property bool $linkedToGitHub
 * @property string $gitHubAccountName
 * @property 'Server'|'Lambda'|'ECS' $computePlatform
 */
class ApplicationInfo extends Shape
{
    /**
     * @param array{
     *     applicationId?: string,
     *     applicationName?: string,
     *     createTime?: \Aws\Api\DateTimeResult,
     *     linkedToGitHub?: bool,
     *     gitHubAccountName?: string,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
