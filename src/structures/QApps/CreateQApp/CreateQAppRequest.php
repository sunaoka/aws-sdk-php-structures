<?php

namespace Sunaoka\Aws\Structures\QApps\CreateQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $title
 * @property string $description
 * @property Shapes\AppDefinitionInput $appDefinition
 * @property array<string, string> $tags
 */
class CreateQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     title: string,
     *     description?: string,
     *     appDefinition: Shapes\AppDefinitionInput,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
