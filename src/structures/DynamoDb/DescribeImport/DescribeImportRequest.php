<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImportArn
 */
class DescribeImportRequest extends Request
{
    /**
     * @param array{ImportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
