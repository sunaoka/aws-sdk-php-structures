<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FlywheelFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListFlywheelsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\FlywheelFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
