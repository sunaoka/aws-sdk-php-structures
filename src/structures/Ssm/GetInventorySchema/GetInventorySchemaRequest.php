<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventorySchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TypeName
 * @property string|null $NextToken
 * @property int<50, 200>|null $MaxResults
 * @property bool|null $Aggregator
 * @property bool|null $SubType
 */
class GetInventorySchemaRequest extends Request
{
    /**
     * @param array{
     *     TypeName?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<50, 200>|null,
     *     Aggregator?: bool|null,
     *     SubType?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
