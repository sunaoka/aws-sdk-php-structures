<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
