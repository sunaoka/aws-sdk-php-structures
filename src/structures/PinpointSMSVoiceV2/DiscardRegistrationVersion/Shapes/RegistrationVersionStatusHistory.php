<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DiscardRegistrationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $DraftTimestamp
 * @property \Aws\Api\DateTimeResult $SubmittedTimestamp
 * @property \Aws\Api\DateTimeResult $ReviewingTimestamp
 * @property \Aws\Api\DateTimeResult $RequiresAuthenticationTimestamp
 * @property \Aws\Api\DateTimeResult $ApprovedTimestamp
 * @property \Aws\Api\DateTimeResult $DiscardedTimestamp
 * @property \Aws\Api\DateTimeResult $DeniedTimestamp
 * @property \Aws\Api\DateTimeResult $RevokedTimestamp
 * @property \Aws\Api\DateTimeResult $ArchivedTimestamp
 */
class RegistrationVersionStatusHistory extends Shape
{
    /**
     * @param array{
     *     DraftTimestamp: \Aws\Api\DateTimeResult,
     *     SubmittedTimestamp?: \Aws\Api\DateTimeResult,
     *     ReviewingTimestamp?: \Aws\Api\DateTimeResult,
     *     RequiresAuthenticationTimestamp?: \Aws\Api\DateTimeResult,
     *     ApprovedTimestamp?: \Aws\Api\DateTimeResult,
     *     DiscardedTimestamp?: \Aws\Api\DateTimeResult,
     *     DeniedTimestamp?: \Aws\Api\DateTimeResult,
     *     RevokedTimestamp?: \Aws\Api\DateTimeResult,
     *     ArchivedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
