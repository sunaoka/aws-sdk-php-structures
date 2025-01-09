<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property string $SourceArn
 * @property list<string> $ReplyToAddresses
 * @property string $ReturnPath
 * @property string $ReturnPathArn
 * @property string $ConfigurationSetName
 * @property list<Shapes\MessageTag> $DefaultTags
 * @property string $Template
 * @property string $TemplateArn
 * @property string $DefaultTemplateData
 * @property list<Shapes\BulkEmailDestination> $Destinations
 */
class SendBulkTemplatedEmailRequest extends Request
{
    /**
     * @param array{
     *     Source: string,
     *     SourceArn?: string,
     *     ReplyToAddresses?: list<string>,
     *     ReturnPath?: string,
     *     ReturnPathArn?: string,
     *     ConfigurationSetName?: string,
     *     DefaultTags?: list<Shapes\MessageTag>,
     *     Template: string,
     *     TemplateArn?: string,
     *     DefaultTemplateData: string,
     *     Destinations: list<Shapes\BulkEmailDestination>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
