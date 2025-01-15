<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRepositoryCreationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $prefixes
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeRepositoryCreationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     prefixes?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
