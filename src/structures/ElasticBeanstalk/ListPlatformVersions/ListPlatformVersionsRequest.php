<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PlatformFilter> $Filters
 * @property int<1, max> $MaxRecords
 * @property string $NextToken
 */
class ListPlatformVersionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\PlatformFilter>,
     *     MaxRecords?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
