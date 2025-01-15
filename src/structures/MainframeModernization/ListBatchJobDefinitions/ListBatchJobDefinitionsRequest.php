<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, 2000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $prefix
 */
class ListBatchJobDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int<1, 2000>|null,
     *     nextToken?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
