<?php

namespace Sunaoka\Aws\Structures\AppSync\GetType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 * @property 'SDL'|'JSON' $format
 */
class GetTypeRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string,
     *     format: 'SDL'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
