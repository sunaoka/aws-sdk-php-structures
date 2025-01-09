<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $description
 * @property string $displayName
 * @property string $ipAccessSettingsArn
 */
class IpAccessSettingsSummary extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     displayName?: string,
     *     ipAccessSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
