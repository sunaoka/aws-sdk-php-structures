<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataflowGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PythonScript
 */
class GetDataflowGraphRequest extends Request
{
    /**
     * @param array{PythonScript?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
