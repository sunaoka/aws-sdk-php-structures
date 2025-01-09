<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteIndexRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
