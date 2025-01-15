<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListUserAccessLoggingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kinesisStreamArn
 * @property string $userAccessLoggingSettingsArn
 */
class UserAccessLoggingSettingsSummary extends Shape
{
    /**
     * @param array{
     *     kinesisStreamArn?: string|null,
     *     userAccessLoggingSettingsArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
