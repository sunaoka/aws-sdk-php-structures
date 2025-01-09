<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodeFromTemplateJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $JobId
 * @property string $NodeName
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property 'RTSP_CAMERA_STREAM' $TemplateType
 */
class NodeFromTemplateJob extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     JobId?: string,
     *     NodeName?: string,
     *     Status?: 'PENDING'|'SUCCEEDED'|'FAILED',
     *     StatusMessage?: string,
     *     TemplateType?: 'RTSP_CAMERA_STREAM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
