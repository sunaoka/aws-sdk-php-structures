<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateChimeWebhookConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebhookDescription
 * @property string $ChatConfigurationArn
 * @property string $IamRoleArn
 * @property list<string> $SnsTopicArns
 * @property string $ConfigurationName
 * @property string $LoggingLevel
 * @property list<Tag> $Tags
 * @property string $State
 * @property string $StateReason
 */
class ChimeWebhookConfiguration extends Shape
{
    /**
     * @param array{
     *     WebhookDescription: string,
     *     ChatConfigurationArn: string,
     *     IamRoleArn: string,
     *     SnsTopicArns: list<string>,
     *     ConfigurationName?: string,
     *     LoggingLevel?: string,
     *     Tags?: list<Tag>,
     *     State?: string,
     *     StateReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
