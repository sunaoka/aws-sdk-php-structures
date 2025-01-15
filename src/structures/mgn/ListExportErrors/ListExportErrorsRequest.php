<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportID
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListExportErrorsRequest extends Request
{
    /**
     * @param array{
     *     exportID: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
