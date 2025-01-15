<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ResourceArns
 * @property Shapes\TimeRange|null $StartTime
 * @property Shapes\TimeRange|null $EndTime
 * @property string|null $NextToken
 * @property int<0, 10000>|null $MaxResults
 */
class ListAttacksRequest extends Request
{
    /**
     * @param array{
     *     ResourceArns?: list<string>|null,
     *     StartTime?: Shapes\TimeRange|null,
     *     EndTime?: Shapes\TimeRange|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
