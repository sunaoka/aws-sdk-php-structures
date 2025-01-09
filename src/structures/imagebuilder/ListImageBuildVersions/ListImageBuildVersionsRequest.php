<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageVersionArn
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListImageBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     imageVersionArn: string,
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
