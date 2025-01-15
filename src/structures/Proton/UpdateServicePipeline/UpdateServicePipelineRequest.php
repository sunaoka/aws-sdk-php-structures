<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServicePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION' $deploymentType
 * @property string $serviceName
 * @property string $spec
 * @property string|null $templateMajorVersion
 * @property string|null $templateMinorVersion
 */
class UpdateServicePipelineRequest extends Request
{
    /**
     * @param array{
     *     deploymentType: 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION',
     *     serviceName: string,
     *     spec: string,
     *     templateMajorVersion?: string|null,
     *     templateMinorVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
