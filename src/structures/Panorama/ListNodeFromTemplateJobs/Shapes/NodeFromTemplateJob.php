<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodeFromTemplateJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $JobId
 * @property string|null $NodeName
 * @property 'PENDING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property 'RTSP_CAMERA_STREAM'|null $TemplateType
 */
class NodeFromTemplateJob extends Shape
{
    /**
     * @param array{
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     JobId?: string|null,
     *     NodeName?: string|null,
     *     Status?: 'PENDING'|'SUCCEEDED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     TemplateType?: 'RTSP_CAMERA_STREAM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
