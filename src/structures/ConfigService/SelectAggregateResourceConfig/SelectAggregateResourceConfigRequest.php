<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectAggregateResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Expression
 * @property string $ConfigurationAggregatorName
 * @property int $Limit
 * @property int $MaxResults
 * @property string $NextToken
 */
class SelectAggregateResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     Expression: string,
     *     ConfigurationAggregatorName: string,
     *     Limit?: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
