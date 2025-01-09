<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConformancePackNames
 * @property int<0, 20> $Limit
 * @property string $NextToken
 */
class DescribeConformancePacksRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackNames?: list<string>,
     *     Limit?: int<0, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
