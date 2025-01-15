<?php

namespace Sunaoka\Aws\Structures\ConfigService\SelectAggregateResourceConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Expression
 * @property string $ConfigurationAggregatorName
 * @property int<0, 100>|null $Limit
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class SelectAggregateResourceConfigRequest extends Request
{
    /**
     * @param array{
     *     Expression: string,
     *     ConfigurationAggregatorName: string,
     *     Limit?: int<0, 100>|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
