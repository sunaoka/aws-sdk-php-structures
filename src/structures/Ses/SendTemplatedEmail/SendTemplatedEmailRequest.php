<?php

namespace Sunaoka\Aws\Structures\Ses\SendTemplatedEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property Shapes\Destination $Destination
 * @property list<string> $ReplyToAddresses
 * @property string $ReturnPath
 * @property string $SourceArn
 * @property string $ReturnPathArn
 * @property list<Shapes\MessageTag> $Tags
 * @property string $ConfigurationSetName
 * @property string $Template
 * @property string $TemplateArn
 * @property string $TemplateData
 */
class SendTemplatedEmailRequest extends Request
{
    /**
     * @param array{
     *     Source: string,
     *     Destination: Shapes\Destination,
     *     ReplyToAddresses?: list<string>,
     *     ReturnPath?: string,
     *     SourceArn?: string,
     *     ReturnPathArn?: string,
     *     Tags?: list<Shapes\MessageTag>,
     *     ConfigurationSetName?: string,
     *     Template: string,
     *     TemplateArn?: string,
     *     TemplateData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
