<?php

namespace Sunaoka\Aws\Structures\Athena\GetNamedQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamedQueryId
 */
class GetNamedQueryRequest extends Request
{
    /**
     * @param array{NamedQueryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
