<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationId
 * @property string|null $applicationName
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property bool|null $linkedToGitHub
 * @property string|null $gitHubAccountName
 * @property 'Server'|'Lambda'|'ECS'|null $computePlatform
 */
class ApplicationInfo extends Shape
{
    /**
     * @param array{
     *     applicationId?: string|null,
     *     applicationName?: string|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     linkedToGitHub?: bool|null,
     *     gitHubAccountName?: string|null,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
