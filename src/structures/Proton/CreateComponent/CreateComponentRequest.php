<?php

namespace Sunaoka\Aws\Structures\Proton\CreateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string|null $environmentName
 * @property string $manifest
 * @property string $name
 * @property string|null $serviceInstanceName
 * @property string|null $serviceName
 * @property string|null $serviceSpec
 * @property list<Shapes\Tag>|null $tags
 * @property string $templateFile
 */
class CreateComponentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     environmentName?: string|null,
     *     manifest: string,
     *     name: string,
     *     serviceInstanceName?: string|null,
     *     serviceName?: string|null,
     *     serviceSpec?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     templateFile: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
