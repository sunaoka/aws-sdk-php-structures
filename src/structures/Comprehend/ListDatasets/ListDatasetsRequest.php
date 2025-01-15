<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FlywheelArn
 * @property Shapes\DatasetFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn?: string|null,
     *     Filter?: Shapes\DatasetFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
