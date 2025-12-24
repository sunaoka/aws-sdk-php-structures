<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SubmitRegistrationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $DraftTimestamp
 * @property \Aws\Api\DateTimeResult|null $SubmittedTimestamp
 * @property \Aws\Api\DateTimeResult|null $AwsReviewingTimestamp
 * @property \Aws\Api\DateTimeResult|null $ReviewingTimestamp
 * @property \Aws\Api\DateTimeResult|null $RequiresAuthenticationTimestamp
 * @property \Aws\Api\DateTimeResult|null $ApprovedTimestamp
 * @property \Aws\Api\DateTimeResult|null $DiscardedTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeniedTimestamp
 * @property \Aws\Api\DateTimeResult|null $RevokedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ArchivedTimestamp
 */
class RegistrationVersionStatusHistory extends Shape
{
    /**
     * @param array{
     *     DraftTimestamp: \Aws\Api\DateTimeResult,
     *     SubmittedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AwsReviewingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ReviewingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RequiresAuthenticationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ApprovedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DiscardedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeniedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RevokedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ArchivedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
