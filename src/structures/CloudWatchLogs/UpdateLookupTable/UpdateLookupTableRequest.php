<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateLookupTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lookupTableArn
 * @property string|null $description
 * @property string|null $tableBody
 * @property string|null $queryId
 * @property string|null $kmsKeyId
 */
class UpdateLookupTableRequest extends Request
{
    /**
     * @param array{
     *     lookupTableArn: string,
     *     description?: string|null,
     *     tableBody?: string|null,
     *     queryId?: string|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
