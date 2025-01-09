<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $keyspaceName
 * @property string $typeName
 */
class GetTypeRequest extends Request
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
