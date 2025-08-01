<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserAccessLoggingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userAccessLoggingSettingsArn
 * @property string|null $kinesisStreamArn
 */
class UserAccessLoggingSettingsSummary extends Shape
{
    /**
     * @param array{
     *     userAccessLoggingSettingsArn: string,
     *     kinesisStreamArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
