<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRepositoryCreationTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $prefixes
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeRepositoryCreationTemplatesRequest extends Request
{
    /**
     * @param array{
     *     prefixes?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
