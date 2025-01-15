<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property list<Shapes\Attribute> $attributes
 */
class PutAttributesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     attributes: list<Shapes\Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
