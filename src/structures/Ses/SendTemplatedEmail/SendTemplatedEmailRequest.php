<?php

namespace Sunaoka\Aws\Structures\Ses\SendTemplatedEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property Shapes\Destination $Destination
 * @property list<string>|null $ReplyToAddresses
 * @property string|null $ReturnPath
 * @property string|null $SourceArn
 * @property string|null $ReturnPathArn
 * @property list<Shapes\MessageTag>|null $Tags
 * @property string|null $ConfigurationSetName
 * @property string $Template
 * @property string|null $TemplateArn
 * @property string $TemplateData
 */
class SendTemplatedEmailRequest extends Request
{
    /**
     * @param array{
     *     Source: string,
     *     Destination: Shapes\Destination,
     *     ReplyToAddresses?: list<string>|null,
     *     ReturnPath?: string|null,
     *     SourceArn?: string|null,
     *     ReturnPathArn?: string|null,
     *     Tags?: list<Shapes\MessageTag>|null,
     *     ConfigurationSetName?: string|null,
     *     Template: string,
     *     TemplateArn?: string|null,
     *     TemplateData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
