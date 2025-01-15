<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property string|null $TransportAttachmentId
 * @property ConnectAttachmentOptions|null $Options
 */
class ConnectAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     TransportAttachmentId?: string|null,
     *     Options?: ConnectAttachmentOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
