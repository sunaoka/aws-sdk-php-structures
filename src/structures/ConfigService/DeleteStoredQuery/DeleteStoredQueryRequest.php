<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteStoredQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryName
 */
class DeleteStoredQueryRequest extends Request
{
    /**
     * @param array{QueryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
