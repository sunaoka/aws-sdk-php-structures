<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FlywheelFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListFlywheelsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\FlywheelFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
