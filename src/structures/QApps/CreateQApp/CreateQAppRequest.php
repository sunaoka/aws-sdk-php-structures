<?php

namespace Sunaoka\Aws\Structures\QApps\CreateQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $title
 * @property string|null $description
 * @property Shapes\AppDefinitionInput $appDefinition
 * @property array<string, string>|null $tags
 */
class CreateQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     title: string,
     *     description?: string|null,
     *     appDefinition: Shapes\AppDefinitionInput,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
