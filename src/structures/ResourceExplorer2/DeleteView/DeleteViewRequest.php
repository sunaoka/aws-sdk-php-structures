<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\DeleteView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ViewArn
 */
class DeleteViewRequest extends Request
{
    /**
     * @param array{ViewArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
