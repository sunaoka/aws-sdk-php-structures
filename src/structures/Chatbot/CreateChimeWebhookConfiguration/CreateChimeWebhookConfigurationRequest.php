<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateChimeWebhookConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebhookDescription
 * @property string $WebhookUrl
 * @property list<string> $SnsTopicArns
 * @property string $IamRoleArn
 * @property string $ConfigurationName
 * @property string $LoggingLevel
 * @property list<Shapes\Tag> $Tags
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
     *     LoggingLevel?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
