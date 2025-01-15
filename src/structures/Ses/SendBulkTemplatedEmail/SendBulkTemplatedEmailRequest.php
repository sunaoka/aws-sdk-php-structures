<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property string|null $SourceArn
 * @property list<string>|null $ReplyToAddresses
 * @property string|null $ReturnPath
 * @property string|null $ReturnPathArn
 * @property string|null $ConfigurationSetName
 * @property list<Shapes\MessageTag>|null $DefaultTags
 * @property string $Template
 * @property string|null $TemplateArn
 * @property string $DefaultTemplateData
 * @property list<Shapes\BulkEmailDestination> $Destinations
 */
class SendBulkTemplatedEmailRequest extends Request
{
    /**
     * @param array{
     *     Source: string,
     *     SourceArn?: string|null,
     *     ReplyToAddresses?: list<string>|null,
     *     ReturnPath?: string|null,
     *     ReturnPathArn?: string|null,
     *     ConfigurationSetName?: string|null,
     *     DefaultTags?: list<Shapes\MessageTag>|null,
     *     Template: string,
     *     TemplateArn?: string|null,
     *     DefaultTemplateData: string,
     *     Destinations: list<Shapes\BulkEmailDestination>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
