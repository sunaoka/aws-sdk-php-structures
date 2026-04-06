<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property string|null $title
 * @property string|null $description
 * @property Shapes\AppDefinitionInput|null $appDefinition
 */
class UpdateQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     title?: string|null,
     *     description?: string|null,
     *     appDefinition?: Shapes\AppDefinitionInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
