<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 */
class DescribeExportRequest extends Request
{
    /**
     * @param array{ExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
