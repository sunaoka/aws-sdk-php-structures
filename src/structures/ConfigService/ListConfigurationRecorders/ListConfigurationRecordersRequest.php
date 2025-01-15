<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConfigurationRecorders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConfigurationRecorderFilter>|null $Filters
 * @property int<0, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class ListConfigurationRecordersRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ConfigurationRecorderFilter>|null,
     *     MaxResults?: int<0, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
