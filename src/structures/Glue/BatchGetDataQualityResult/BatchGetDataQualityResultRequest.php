<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResultIds
 */
class BatchGetDataQualityResultRequest extends Request
{
    /**
     * @param array{ResultIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
