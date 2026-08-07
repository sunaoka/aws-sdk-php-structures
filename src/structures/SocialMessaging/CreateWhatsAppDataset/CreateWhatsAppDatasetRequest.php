<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class CreateWhatsAppDatasetRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
