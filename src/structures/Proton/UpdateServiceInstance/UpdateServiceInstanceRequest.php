<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION' $deploymentType
 * @property string $name
 * @property string $serviceName
 * @property string $spec
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 */
class UpdateServiceInstanceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     deploymentType: 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION',
     *     name: string,
     *     serviceName: string,
     *     spec?: string,
     *     templateMajorVersion?: string,
     *     templateMinorVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
