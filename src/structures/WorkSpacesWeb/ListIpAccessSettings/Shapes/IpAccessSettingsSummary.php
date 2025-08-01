<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAccessSettingsArn
 * @property string|null $displayName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class IpAccessSettingsSummary extends Shape
{
    /**
     * @param array{
     *     ipAccessSettingsArn: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
