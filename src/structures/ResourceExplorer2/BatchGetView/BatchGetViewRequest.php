<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\BatchGetView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ViewArns
 */
class BatchGetViewRequest extends Request
{
    /**
     * @param array{ViewArns?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
