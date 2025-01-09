<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteDataLake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $regions
 */
class DeleteDataLakeRequest extends Request
{
    /**
     * @param array{regions: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
