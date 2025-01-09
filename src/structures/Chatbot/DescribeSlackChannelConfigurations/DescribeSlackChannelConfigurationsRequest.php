<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackChannelConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ChatConfigurationArn
 */
class DescribeSlackChannelConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ChatConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
