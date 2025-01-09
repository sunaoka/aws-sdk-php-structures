<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNodeFromTemplateJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $JobId
 * @property list<Shapes\JobResourceTags> $JobTags
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $NodeDescription
 * @property string $NodeName
 * @property string $OutputPackageName
 * @property string $OutputPackageVersion
 * @property 'PENDING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property array<string, string> $TemplateParameters
 * @property 'RTSP_CAMERA_STREAM' $TemplateType
 */
class DescribeNodeFromTemplateJobResponse extends Response
{
}
