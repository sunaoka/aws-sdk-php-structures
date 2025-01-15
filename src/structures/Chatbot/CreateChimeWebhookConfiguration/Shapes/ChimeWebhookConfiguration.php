<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateChimeWebhookConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WebhookDescription
 * @property string $ChatConfigurationArn
 * @property string $IamRoleArn
 * @property list<string> $SnsTopicArns
 * @property string|null $ConfigurationName
 * @property string|null $LoggingLevel
 * @property list<Tag>|null $Tags
 * @property string|null $State
 * @property string|null $StateReason
 */
class ChimeWebhookConfiguration extends Shape
{
    /**
     * @param array{
     *     WebhookDescription: string,
     *     ChatConfigurationArn: string,
     *     IamRoleArn: string,
     *     SnsTopicArns: list<string>,
     *     ConfigurationName?: string|null,
     *     LoggingLevel?: string|null,
     *     Tags?: list<Tag>|null,
     *     State?: string|null,
     *     StateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
