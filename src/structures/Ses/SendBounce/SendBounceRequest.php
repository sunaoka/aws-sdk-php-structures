<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginalMessageId
 * @property string $BounceSender
 * @property string|null $Explanation
 * @property Shapes\MessageDsn|null $MessageDsn
 * @property list<Shapes\BouncedRecipientInfo> $BouncedRecipientInfoList
 * @property string|null $BounceSenderArn
 */
class SendBounceRequest extends Request
{
    /**
     * @param array{
     *     OriginalMessageId: string,
     *     BounceSender: string,
     *     Explanation?: string|null,
     *     MessageDsn?: Shapes\MessageDsn|null,
     *     BouncedRecipientInfoList: list<Shapes\BouncedRecipientInfo>,
     *     BounceSenderArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
