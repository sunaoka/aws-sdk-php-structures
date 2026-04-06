<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceleratorArn
 * @property string $ResourceOwnerAwsAccountId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCrossAccountResourcesRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn?: string|null,
     *     ResourceOwnerAwsAccountId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
