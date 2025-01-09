<?php

namespace Sunaoka\Aws\Structures\Ses\SendRawEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Source
 * @property list<string> $Destinations
 * @property Shapes\RawMessage $RawMessage
 * @property string $FromArn
 * @property string $SourceArn
 * @property string $ReturnPathArn
 * @property list<Shapes\MessageTag> $Tags
 * @property string $ConfigurationSetName
 */
class SendRawEmailRequest extends Request
{
    /**
     * @param array{
     *     Source?: string,
     *     Destinations?: list<string>,
     *     RawMessage: Shapes\RawMessage,
     *     FromArn?: string,
     *     SourceArn?: string,
     *     ReturnPathArn?: string,
     *     Tags?: list<Shapes\MessageTag>,
     *     ConfigurationSetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
