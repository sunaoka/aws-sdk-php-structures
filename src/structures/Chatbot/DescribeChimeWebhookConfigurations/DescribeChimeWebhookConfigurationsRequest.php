<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeChimeWebhookConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ChatConfigurationArn
 */
class DescribeChimeWebhookConfigurationsRequest extends Request
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
