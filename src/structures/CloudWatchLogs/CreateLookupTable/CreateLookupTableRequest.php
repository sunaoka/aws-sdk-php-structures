<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLookupTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lookupTableName
 * @property string|null $description
 * @property string $tableBody
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $tags
 */
class CreateLookupTableRequest extends Request
{
    /**
     * @param array{
     *     lookupTableName: string,
     *     description?: string|null,
     *     tableBody: string,
     *     kmsKeyId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
