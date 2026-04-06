<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
