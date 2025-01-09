<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilderAppBlockAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppBlockArn
 * @property string $AppBlockBuilderName
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeAppBlockBuilderAppBlockAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AppBlockArn?: string,
     *     AppBlockBuilderName?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
