<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AgentAccessSetting> $Settings
 * @property string|null $S3BucketArn
 * @property bool|null $ScreenshotsUploadEnabled
 * @property 'W_1280xH_720' $ScreenResolution
 * @property 'PNG'|'JPEG' $ScreenImageFormat
 */
class AgentAccessConfig extends Shape
{
    /**
     * @param array{
     *     Settings: list<AgentAccessSetting>,
     *     S3BucketArn?: string|null,
     *     ScreenshotsUploadEnabled?: bool|null,
     *     ScreenResolution: 'W_1280xH_720',
     *     ScreenImageFormat: 'PNG'|'JPEG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
