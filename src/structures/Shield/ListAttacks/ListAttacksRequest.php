<?php

namespace Sunaoka\Aws\Structures\Shield\ListAttacks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceArns
 * @property Shapes\TimeRange $StartTime
 * @property Shapes\TimeRange $EndTime
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAttacksRequest extends Request
{
    /**
     * @param array{
     *     ResourceArns?: list<string>,
     *     StartTime?: Shapes\TimeRange,
     *     EndTime?: Shapes\TimeRange,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
