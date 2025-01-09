<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserAccessLoggingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kinesisStreamArn
 * @property string $userAccessLoggingSettingsArn
 */
class UserAccessLoggingSettingsSummary extends Shape
{
    /**
     * @param array{
     *     kinesisStreamArn?: string,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
