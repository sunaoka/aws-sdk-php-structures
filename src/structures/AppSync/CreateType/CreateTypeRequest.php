<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $definition
 * @property 'SDL'|'JSON' $format
 */
class CreateTypeRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     definition: string,
     *     format: 'SDL'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
