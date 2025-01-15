<?php

namespace Sunaoka\Aws\Structures\Ses\SendRawEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Source
 * @property list<string>|null $Destinations
 * @property Shapes\RawMessage $RawMessage
 * @property string|null $FromArn
 * @property string|null $SourceArn
 * @property string|null $ReturnPathArn
 * @property list<Shapes\MessageTag>|null $Tags
 * @property string|null $ConfigurationSetName
 */
class SendRawEmailRequest extends Request
{
    /**
     * @param array{
     *     Source?: string|null,
     *     Destinations?: list<string>|null,
     *     RawMessage: Shapes\RawMessage,
     *     FromArn?: string|null,
     *     SourceArn?: string|null,
     *     ReturnPathArn?: string|null,
     *     Tags?: list<Shapes\MessageTag>|null,
     *     ConfigurationSetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
