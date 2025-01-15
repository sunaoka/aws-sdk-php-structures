<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<string>|null $ProjectNames
 * @property list<'CONTENT_MODERATION'|'CUSTOM_LABELS'>|null $Features
 */
class DescribeProjectsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ProjectNames?: list<string>|null,
     *     Features?: list<'CONTENT_MODERATION'|'CUSTOM_LABELS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
