<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 */
class DeleteTypeRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
