<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePackStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConformancePackNames
 * @property int<0, 20>|null $Limit
 * @property string|null $NextToken
 */
class DescribeConformancePackStatusRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackNames?: list<string>|null,
     *     Limit?: int<0, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
