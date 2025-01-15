<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NamePrefix
 * @property string|null $PrimaryEmailPrefix
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 */
class ListResourcesFilters extends Shape
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     PrimaryEmailPrefix?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
