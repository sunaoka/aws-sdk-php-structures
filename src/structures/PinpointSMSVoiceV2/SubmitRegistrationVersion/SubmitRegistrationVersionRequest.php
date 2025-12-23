<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SubmitRegistrationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 * @property bool|null $AwsReview
 */
class SubmitRegistrationVersionRequest extends Request
{
    /**
     * @param array{
     *     RegistrationId: string,
     *     AwsReview?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
