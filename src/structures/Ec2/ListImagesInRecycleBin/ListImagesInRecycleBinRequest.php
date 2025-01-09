<?php

namespace Sunaoka\Aws\Structures\Ec2\ListImagesInRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ImageIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 */
class ListImagesInRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     ImageIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
