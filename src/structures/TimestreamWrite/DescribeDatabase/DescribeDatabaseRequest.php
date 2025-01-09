<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 */
class DescribeDatabaseRequest extends Request
{
    /**
     * @param array{DatabaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
