<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 * @property string $title
 * @property string $description
 * @property Shapes\AppDefinitionInput $appDefinition
 */
class UpdateQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string,
     *     title?: string,
     *     description?: string,
     *     appDefinition?: Shapes\AppDefinitionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
