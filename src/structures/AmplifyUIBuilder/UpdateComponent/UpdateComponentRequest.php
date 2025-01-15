<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string|null $clientToken
 * @property Shapes\UpdateComponentData $updatedComponent
 */
class UpdateComponentRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     clientToken?: string|null,
     *     updatedComponent: Shapes\UpdateComponentData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
