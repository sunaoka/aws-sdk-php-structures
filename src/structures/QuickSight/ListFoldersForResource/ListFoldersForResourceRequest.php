<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFoldersForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ResourceArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListFoldersForResourceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ResourceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
