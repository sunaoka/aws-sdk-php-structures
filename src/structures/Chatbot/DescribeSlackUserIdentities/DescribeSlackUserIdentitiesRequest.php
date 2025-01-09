<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackUserIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class DescribeSlackUserIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
