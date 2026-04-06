<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListIpAccessSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $description
 * @property string|null $displayName
 * @property string $ipAccessSettingsArn
 */
class IpAccessSettingsSummary extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     ipAccessSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
