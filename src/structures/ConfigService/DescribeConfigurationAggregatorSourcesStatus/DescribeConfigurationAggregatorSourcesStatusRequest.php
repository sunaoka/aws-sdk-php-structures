<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigurationAggregatorSourcesStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationAggregatorName
 * @property list<'FAILED'|'SUCCEEDED'|'OUTDATED'> $UpdateStatus
 * @property string $NextToken
 * @property int $Limit
 */
class DescribeConfigurationAggregatorSourcesStatusRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationAggregatorName: string,
     *     UpdateStatus?: list<'FAILED'|'SUCCEEDED'|'OUTDATED'>,
     *     NextToken?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
