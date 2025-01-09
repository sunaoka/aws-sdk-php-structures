<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceArns
 * @property Shapes\TimeRange $StartTime
 * @property Shapes\TimeRange $EndTime
 * @property string $NextToken
 * @property int<0, 10000> $MaxResults
 */
class ListAttacksRequest extends Request
{
    /**
     * @param array{
     *     ResourceArns?: list<string>,
     *     StartTime?: Shapes\TimeRange,
     *     EndTime?: Shapes\TimeRange,
     *     NextToken?: string,
     *     MaxResults?: int<0, 10000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
