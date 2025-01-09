<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmPublicVirtualInterface;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'confirming'|'verifying'|'pending'|'available'|'down'|'deleting'|'deleted'|'rejected'|'unknown' $virtualInterfaceState
 */
class ConfirmPublicVirtualInterfaceResponse extends Response
{
}
