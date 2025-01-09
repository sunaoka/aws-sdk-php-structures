<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServicePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION' $deploymentType
 * @property string $serviceName
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 */
class UpdateServicePipelineRequest extends Request
{
    /**
     * @param array{
     *     deploymentType: 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION',
     *     serviceName: string,
     *     spec: string,
     *     templateMajorVersion?: string,
     *     templateMinorVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
