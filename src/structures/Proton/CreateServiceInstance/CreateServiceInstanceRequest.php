<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $name
 * @property string $serviceName
 * @property string $spec
 * @property list<Shapes\Tag> $tags
 * @property string $templateMajorVersion
 * @property string $templateMinorVersion
 */
class CreateServiceInstanceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     name: string,
     *     serviceName: string,
     *     spec: string,
     *     tags?: list<Shapes\Tag>,
     *     templateMajorVersion?: string,
     *     templateMinorVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
