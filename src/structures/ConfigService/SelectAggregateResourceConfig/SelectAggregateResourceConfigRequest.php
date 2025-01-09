<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectAggregateResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Expression
 * @property string $ConfigurationAggregatorName
 * @property int<0, 100> $Limit
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 */
class SelectAggregateResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     Expression: string,
     *     ConfigurationAggregatorName: string,
     *     Limit?: int<0, 100>,
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
