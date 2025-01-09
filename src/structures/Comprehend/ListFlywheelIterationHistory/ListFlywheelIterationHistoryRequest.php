<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheelIterationHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property Shapes\FlywheelIterationFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListFlywheelIterationHistoryRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     Filter?: Shapes\FlywheelIterationFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
