<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListOutpostsWithS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<0, 100> $MaxResults
 */
class ListOutpostsWithS3Request extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
