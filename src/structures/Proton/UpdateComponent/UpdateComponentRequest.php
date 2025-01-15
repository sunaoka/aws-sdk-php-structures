<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'NONE'|'CURRENT_VERSION' $deploymentType
 * @property string|null $description
 * @property string $name
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 * @property string|null $serviceSpec
 * @property string|null $templateFile
 */
class UpdateComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     deploymentType: 'NONE'|'CURRENT_VERSION',
     *     description?: string|null,
     *     name: string,
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null,
     *     serviceSpec?: string|null,
     *     templateFile?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
