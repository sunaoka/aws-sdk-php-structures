<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property string $ResourceOwnerAwsAccountId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCrossAccountResourcesRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn?: string,
     *     ResourceOwnerAwsAccountId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
