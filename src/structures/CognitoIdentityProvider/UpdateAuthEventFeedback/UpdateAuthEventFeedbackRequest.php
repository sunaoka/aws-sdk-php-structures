<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateAuthEventFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $EventId
 * @property string $FeedbackToken
 * @property 'Valid'|'Invalid' $FeedbackValue
 */
class UpdateAuthEventFeedbackRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     EventId: string,
     *     FeedbackToken: string,
     *     FeedbackValue: 'Valid'|'Invalid'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
