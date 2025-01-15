<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateChimeWebhookConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebhookDescription
 * @property string $WebhookUrl
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $ConfigurationName
 * @property string|null $LoggingLevel
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateChimeWebhookConfigurationRequest extends Request
{
    /**
     * @param array{
     *     WebhookDescription: string,
     *     WebhookUrl: string,
     *     SnsTopicArns: list<string>,
     *     IamRoleArn: string,
     *     ConfigurationName: string,
     *     LoggingLevel?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
