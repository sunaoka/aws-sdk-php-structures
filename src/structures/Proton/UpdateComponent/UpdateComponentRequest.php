<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'NONE'|'CURRENT_VERSION' $deploymentType
 * @property string $description
 * @property string $name
 * @property string $serviceInstanceName
 * @property string $serviceName
 * @property string $serviceSpec
 * @property string $templateFile
 */
class UpdateComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     deploymentType: 'NONE'|'CURRENT_VERSION',
     *     description?: string,
     *     name: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string,
     *     serviceSpec?: string,
     *     templateFile?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
