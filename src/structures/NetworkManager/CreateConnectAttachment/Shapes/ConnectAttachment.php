<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment $Attachment
 * @property string $TransportAttachmentId
 * @property ConnectAttachmentOptions $Options
 */
class ConnectAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment,
     *     TransportAttachmentId?: string,
     *     Options?: ConnectAttachmentOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
