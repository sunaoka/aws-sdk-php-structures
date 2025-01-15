<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListOutpostsWithS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<0, 100>|null $MaxResults
 */
class ListOutpostsWithS3Request extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
