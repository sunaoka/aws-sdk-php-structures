<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineName
 * @property string $MajorEngineVersion
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeOptionGroupOptionsRequest extends Request
{
    /**
     * @param array{
     *     EngineName: string,
     *     MajorEngineVersion?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
