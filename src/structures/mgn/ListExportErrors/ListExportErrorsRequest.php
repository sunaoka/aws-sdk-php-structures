<?php

namespace Sunaoka\Aws\Structures\mgn\ListExportErrors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exportID
 * @property int $maxResults
 * @property string $nextToken
 */
class ListExportErrorsRequest extends Request
{
    /**
     * @param array{
     *     exportID: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
