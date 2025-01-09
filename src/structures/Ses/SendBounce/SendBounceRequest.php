<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OriginalMessageId
 * @property string $BounceSender
 * @property string $Explanation
 * @property Shapes\MessageDsn $MessageDsn
 * @property list<Shapes\BouncedRecipientInfo> $BouncedRecipientInfoList
 * @property string $BounceSenderArn
 */
class SendBounceRequest extends Request
{
    /**
     * @param array{
     *     OriginalMessageId: string,
     *     BounceSender: string,
     *     Explanation?: string,
     *     MessageDsn?: Shapes\MessageDsn,
     *     BouncedRecipientInfoList: list<Shapes\BouncedRecipientInfo>,
     *     BounceSenderArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
