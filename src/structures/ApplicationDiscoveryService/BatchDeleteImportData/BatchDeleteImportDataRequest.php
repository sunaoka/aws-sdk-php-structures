<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\BatchDeleteImportData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $importTaskIds
 * @property bool|null $deleteHistory
 */
class BatchDeleteImportDataRequest extends Request
{
    /**
     * @param array{
     *     importTaskIds: list<string>,
     *     deleteHistory?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
