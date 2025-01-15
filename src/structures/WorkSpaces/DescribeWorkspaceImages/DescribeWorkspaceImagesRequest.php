<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ImageIds
 * @property 'OWNED'|'SHARED'|null $ImageType
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 */
class DescribeWorkspaceImagesRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>|null,
     *     ImageType?: 'OWNED'|'SHARED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
