<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubDeviceArn
 * @property RecorderConfig $RecorderConfig
 * @property UploaderConfig $UploaderConfig
 * @property DeletionConfig $DeletionConfig
 */
class EdgeConfig extends Shape
{
    /**
     * @param array{
     *     HubDeviceArn: string,
     *     RecorderConfig: RecorderConfig,
     *     UploaderConfig?: UploaderConfig,
     *     DeletionConfig?: DeletionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
