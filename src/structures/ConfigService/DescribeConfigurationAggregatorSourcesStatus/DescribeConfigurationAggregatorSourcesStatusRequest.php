<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregatorSourcesStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property list<'FAILED'|'SUCCEEDED'|'OUTDATED'>|null $UpdateStatus
 * @property string|null $NextToken
 * @property int<0, 100>|null $Limit
 */
class DescribeConfigurationAggregatorSourcesStatusRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     UpdateStatus?: list<'FAILED'|'SUCCEEDED'|'OUTDATED'>|null,
     *     NextToken?: string|null,
     *     Limit?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
