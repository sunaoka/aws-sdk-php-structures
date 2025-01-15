<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeChimeWebhookConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ChatConfigurationArn
 */
class DescribeChimeWebhookConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ChatConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
