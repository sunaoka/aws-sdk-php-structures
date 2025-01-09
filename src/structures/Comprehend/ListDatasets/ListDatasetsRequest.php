<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlywheelArn
 * @property Shapes\DatasetFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     FlywheelArn?: string,
     *     Filter?: Shapes\DatasetFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
