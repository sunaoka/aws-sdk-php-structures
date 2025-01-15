<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheelIterationHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property Shapes\FlywheelIterationFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListFlywheelIterationHistoryRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn: string,
     *     Filter?: Shapes\FlywheelIterationFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
