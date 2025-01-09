<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListBrands;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListBrandsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
