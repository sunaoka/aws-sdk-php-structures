<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteImportData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $importTaskIds
 */
class BatchDeleteImportDataRequest extends Request
{
    /**
     * @param array{importTaskIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
