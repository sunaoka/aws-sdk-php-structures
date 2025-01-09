<?php

namespace Sunaoka\Aws\Structures\Keyspaces\DeleteType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $typeName
 */
class DeleteTypeRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName: string,
     *     typeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
