<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgentAccessSetting>|null $Settings
 * @property string|null $S3BucketArn
 * @property bool|null $ScreenshotsUploadEnabled
 * @property 'W_1280xH_720'|null $ScreenResolution
 * @property 'PNG'|'JPEG'|null $ScreenImageFormat
 */
class AgentAccessConfigForUpdate extends Shape
{
    /**
     * @param array{
     *     Settings?: list<AgentAccessSetting>|null,
     *     S3BucketArn?: string|null,
     *     ScreenshotsUploadEnabled?: bool|null,
     *     ScreenResolution?: 'W_1280xH_720'|null,
     *     ScreenImageFormat?: 'PNG'|'JPEG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
