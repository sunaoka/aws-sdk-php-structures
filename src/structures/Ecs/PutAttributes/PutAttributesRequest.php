<?php

namespace Sunaoka\Aws\Structures\Ecs\PutAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<Shapes\Attribute> $attributes
 */
class PutAttributesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     attributes: list<Shapes\Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
