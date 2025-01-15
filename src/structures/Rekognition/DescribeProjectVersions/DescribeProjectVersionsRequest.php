<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property list<string>|null $VersionNames
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeProjectVersionsRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     VersionNames?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
