<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importId
 */
class DescribeImportRequest extends Request
{
    /**
     * @param array{importId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
