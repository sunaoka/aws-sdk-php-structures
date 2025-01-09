<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeAccountPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 */
class DescribeAccountPreferencesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
