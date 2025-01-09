<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateCloudWatchAlarmTemplateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateCloudWatchAlarmTemplateGroupRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
