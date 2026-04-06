<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetDefaultMessageFeedbackEnabled;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property bool $MessageFeedbackEnabled
 */
class SetDefaultMessageFeedbackEnabledRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     MessageFeedbackEnabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
