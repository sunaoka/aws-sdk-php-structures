<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testId
 * @property string $serviceArn
 * @property 'SUCCESS_CRITERIA'|'OBSERVABILITY'|null $type
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestSourcesRequest extends Request
{
    /**
     * @param array{
     *     testId: string,
     *     serviceArn: string,
     *     type?: 'SUCCESS_CRITERIA'|'OBSERVABILITY'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
