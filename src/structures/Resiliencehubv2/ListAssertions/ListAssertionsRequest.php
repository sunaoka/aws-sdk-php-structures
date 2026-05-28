<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListAssertions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property 'AI_GENERATED'|'USER'|null $source
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAssertionsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     source?: 'AI_GENERATED'|'USER'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
