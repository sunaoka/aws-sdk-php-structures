<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateAuthEventFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $EventId
 * @property 'Valid'|'Invalid' $FeedbackValue
 */
class AdminUpdateAuthEventFeedbackRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     EventId: string,
     *     FeedbackValue: 'Valid'|'Invalid'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
