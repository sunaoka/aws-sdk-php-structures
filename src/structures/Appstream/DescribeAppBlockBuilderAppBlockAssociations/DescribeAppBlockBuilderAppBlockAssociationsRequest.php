<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlockBuilderAppBlockAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AppBlockArn
 * @property string|null $AppBlockBuilderName
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeAppBlockBuilderAppBlockAssociationsRequest extends Request
{
    /**
     * @param array{
     *     AppBlockArn?: string|null,
     *     AppBlockBuilderName?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
