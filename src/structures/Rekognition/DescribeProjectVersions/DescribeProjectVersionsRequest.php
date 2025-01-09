<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property list<string> $VersionNames
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeProjectVersionsRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     VersionNames?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
