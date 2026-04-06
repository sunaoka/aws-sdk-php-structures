<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateChimeWebhookConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChatConfigurationArn
 * @property string|null $WebhookDescription
 * @property string|null $WebhookUrl
 * @property list<string>|null $SnsTopicArns
 * @property string|null $IamRoleArn
 * @property string|null $LoggingLevel
 */
class UpdateChimeWebhookConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChatConfigurationArn: string,
     *     WebhookDescription?: string|null,
     *     WebhookUrl?: string|null,
     *     SnsTopicArns?: list<string>|null,
     *     IamRoleArn?: string|null,
     *     LoggingLevel?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
