<?php

namespace Sunaoka\Aws\Structures\Ec2\ListImagesInRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ImageIds
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $DryRun
 */
class ListImagesInRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
