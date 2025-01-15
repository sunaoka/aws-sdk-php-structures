<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineName
 * @property string|null $MajorEngineVersion
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeOptionGroupOptionsRequest extends Request
{
    /**
     * @param array{
     *     EngineName: string,
     *     MajorEngineVersion?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
