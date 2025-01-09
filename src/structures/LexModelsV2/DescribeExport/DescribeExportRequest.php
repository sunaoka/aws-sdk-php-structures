<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportId
 */
class DescribeExportRequest extends Request
{
    /**
     * @param array{exportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
