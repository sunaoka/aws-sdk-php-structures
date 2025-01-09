<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteNamedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamedQueryId
 */
class DeleteNamedQueryRequest extends Request
{
    /**
     * @param array{NamedQueryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
