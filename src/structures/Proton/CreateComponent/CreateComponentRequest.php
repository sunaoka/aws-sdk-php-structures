<?php

namespace Sunaoka\Aws\Structures\Proton\CreateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $environmentName
 * @property string $manifest
 * @property string $name
 * @property string $serviceInstanceName
 * @property string $serviceName
 * @property string $serviceSpec
 * @property list<Shapes\Tag> $tags
 * @property string $templateFile
 */
class CreateComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     environmentName?: string,
     *     manifest: string,
     *     name: string,
     *     serviceInstanceName?: string,
     *     serviceName?: string,
     *     serviceSpec?: string,
     *     tags?: list<Shapes\Tag>,
     *     templateFile: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
