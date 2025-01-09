<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventorySchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TypeName
 * @property string $NextToken
 * @property int<50, 200> $MaxResults
 * @property bool $Aggregator
 * @property bool $SubType
 */
class GetInventorySchemaRequest extends Request
{
    /**
     * @param array{
     *     TypeName?: string,
     *     NextToken?: string,
     *     MaxResults?: int<50, 200>,
     *     Aggregator?: bool,
     *     SubType?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
