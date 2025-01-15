<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PlatformFilter>|null $Filters
 * @property int<1, max>|null $MaxRecords
 * @property string|null $NextToken
 */
class ListPlatformVersionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\PlatformFilter>|null,
     *     MaxRecords?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
