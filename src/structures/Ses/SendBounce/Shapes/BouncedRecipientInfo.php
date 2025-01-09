<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Recipient
 * @property string $RecipientArn
 * @property 'DoesNotExist'|'MessageTooLarge'|'ExceededQuota'|'ContentRejected'|'Undefined'|'TemporaryFailure' $BounceType
 * @property RecipientDsnFields $RecipientDsnFields
 */
class BouncedRecipientInfo extends Shape
{
    /**
     * @param array{
     *     Recipient: string,
     *     RecipientArn?: string,
     *     BounceType?: 'DoesNotExist'|'MessageTooLarge'|'ExceededQuota'|'ContentRejected'|'Undefined'|'TemporaryFailure',
     *     RecipientDsnFields?: RecipientDsnFields
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
