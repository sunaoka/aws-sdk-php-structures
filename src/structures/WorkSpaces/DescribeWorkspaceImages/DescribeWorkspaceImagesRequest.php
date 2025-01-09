<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ImageIds
 * @property 'OWNED'|'SHARED' $ImageType
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 */
class DescribeWorkspaceImagesRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>,
     *     ImageType?: 'OWNED'|'SHARED',
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
