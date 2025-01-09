<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackUserIdentities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeSlackUserIdentitiesRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
