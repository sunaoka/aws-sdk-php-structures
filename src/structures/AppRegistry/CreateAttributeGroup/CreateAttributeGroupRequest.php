<?php

namespace Sunaoka\Aws\Structures\AppRegistry\CreateAttributeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $attributes
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateAttributeGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     attributes: string,
     *     tags?: array<string, string>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
