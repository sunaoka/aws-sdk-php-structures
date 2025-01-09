<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property list<string> $ProjectNames
 * @property list<'CONTENT_MODERATION'|'CUSTOM_LABELS'> $Features
 */
class DescribeProjectsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     ProjectNames?: list<string>,
     *     Features?: list<'CONTENT_MODERATION'|'CUSTOM_LABELS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
