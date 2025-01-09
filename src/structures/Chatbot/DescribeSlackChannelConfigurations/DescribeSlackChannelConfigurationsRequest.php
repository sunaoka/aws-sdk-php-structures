<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackChannelConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $ChatConfigurationArn
 */
class DescribeSlackChannelConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     ChatConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
