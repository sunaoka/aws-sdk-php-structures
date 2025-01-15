<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Recipient
 * @property string|null $RecipientArn
 * @property 'DoesNotExist'|'MessageTooLarge'|'ExceededQuota'|'ContentRejected'|'Undefined'|'TemporaryFailure'|null $BounceType
 * @property RecipientDsnFields|null $RecipientDsnFields
 */
class BouncedRecipientInfo extends Shape
{
    /**
     * @param array{
     *     Recipient: string,
     *     RecipientArn?: string|null,
     *     BounceType?: 'DoesNotExist'|'MessageTooLarge'|'ExceededQuota'|'ContentRejected'|'Undefined'|'TemporaryFailure'|null,
     *     RecipientDsnFields?: RecipientDsnFields|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
