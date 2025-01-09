<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetCustomEntityTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 */
class BatchGetCustomEntityTypesRequest extends Request
{
    /**
     * @param array{Names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
