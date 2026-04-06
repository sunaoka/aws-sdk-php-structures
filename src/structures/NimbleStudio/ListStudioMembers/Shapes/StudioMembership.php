<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStudioMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identityStoreId
 * @property 'ADMINISTRATOR'|null $persona
 * @property string|null $principalId
 * @property string|null $sid
 */
class StudioMembership extends Shape
{
    /**
     * @param array{
     *     identityStoreId?: string|null,
     *     persona?: 'ADMINISTRATOR'|null,
     *     principalId?: string|null,
     *     sid?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
