<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importID
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListImportErrorsRequest extends Request
{
    /**
     * @param array{
     *     importID: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
