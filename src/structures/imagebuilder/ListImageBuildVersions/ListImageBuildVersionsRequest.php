<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imageVersionArn
 * @property list<Shapes\Filter>|null $filters
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 */
class ListImageBuildVersionsRequest extends Request
{
    /**
     * @param array{
     *     imageVersionArn: string,
     *     filters?: list<Shapes\Filter>|null,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
