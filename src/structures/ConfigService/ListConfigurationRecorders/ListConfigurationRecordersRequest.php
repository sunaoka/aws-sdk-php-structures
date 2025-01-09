<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConfigurationRecorders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConfigurationRecorderFilter> $Filters
 * @property int<0, 20> $MaxResults
 * @property string $NextToken
 */
class ListConfigurationRecordersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ConfigurationRecorderFilter>,
     *     MaxResults?: int<0, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
