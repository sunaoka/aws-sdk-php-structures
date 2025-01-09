<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\BatchGetView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ViewArns
 */
class BatchGetViewRequest extends Request
{
    /**
     * @param array{ViewArns?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
