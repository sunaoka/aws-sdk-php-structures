<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string $serviceName
 * @property string $spec
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $templateMajorVersion
 * @property string|null $templateMinorVersion
 */
class CreateServiceInstanceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     serviceName: string,
     *     spec: string,
     *     tags?: list<Shapes\Tag>|null,
     *     templateMajorVersion?: string|null,
     *     templateMinorVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
