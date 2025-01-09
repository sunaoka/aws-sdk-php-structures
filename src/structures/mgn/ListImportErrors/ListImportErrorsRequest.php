<?php

namespace Sunaoka\Aws\Structures\mgn\ListImportErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $importID
 * @property int $maxResults
 * @property string $nextToken
 */
class ListImportErrorsRequest extends Request
{
    /**
     * @param array{
     *     importID: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
