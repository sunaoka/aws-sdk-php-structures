<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResultV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResultIds
 */
class BatchGetDataQualityResultV2Request extends Request
{
    /**
     * @param array{ResultIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
