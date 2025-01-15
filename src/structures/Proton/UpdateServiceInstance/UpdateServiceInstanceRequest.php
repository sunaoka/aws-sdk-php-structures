<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION' $deploymentType
 * @property string $name
 * @property string $serviceName
 * @property string|null $spec
 * @property string|null $templateMajorVersion
 * @property string|null $templateMinorVersion
 */
class UpdateServiceInstanceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     deploymentType: 'NONE'|'CURRENT_VERSION'|'MINOR_VERSION'|'MAJOR_VERSION',
     *     name: string,
     *     serviceName: string,
     *     spec?: string|null,
     *     templateMajorVersion?: string|null,
     *     templateMinorVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
