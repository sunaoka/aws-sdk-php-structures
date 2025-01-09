<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetStoredQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryName
 */
class GetStoredQueryRequest extends Request
{
    /**
     * @param array{QueryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
