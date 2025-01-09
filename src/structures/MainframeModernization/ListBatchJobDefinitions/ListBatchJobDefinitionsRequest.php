<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, 2000> $maxResults
 * @property string $nextToken
 * @property string $prefix
 */
class ListBatchJobDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     maxResults?: int<1, 2000>,
     *     nextToken?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
