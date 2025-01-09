<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteIndexRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
