<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Valid'|'Invalid' $FeedbackValue
 * @property string $Provider
 * @property \Aws\Api\DateTimeResult|null $FeedbackDate
 */
class EventFeedbackType extends Shape
{
    /**
     * @param array{
     *     FeedbackValue: 'Valid'|'Invalid',
     *     Provider: string,
     *     FeedbackDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
