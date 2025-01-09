<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 * @property string $definition
 * @property 'SDL'|'JSON' $format
 */
class UpdateTypeRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string,
     *     definition?: string,
     *     format: 'SDL'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
