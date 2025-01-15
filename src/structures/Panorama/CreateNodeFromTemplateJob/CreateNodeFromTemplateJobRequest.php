<?php

namespace Sunaoka\Aws\Structures\Panorama\CreateNodeFromTemplateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\JobResourceTags>|null $JobTags
 * @property string|null $NodeDescription
 * @property string $NodeName
 * @property string $OutputPackageName
 * @property string $OutputPackageVersion
 * @property array<string, string> $TemplateParameters
 * @property 'RTSP_CAMERA_STREAM' $TemplateType
 */
class CreateNodeFromTemplateJobRequest extends Request
{
    /**
     * @param array{
     *     JobTags?: list<Shapes\JobResourceTags>|null,
     *     NodeDescription?: string|null,
     *     NodeName: string,
     *     OutputPackageName: string,
     *     OutputPackageVersion: string,
     *     TemplateParameters: array<string, string>,
     *     TemplateType: 'RTSP_CAMERA_STREAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
