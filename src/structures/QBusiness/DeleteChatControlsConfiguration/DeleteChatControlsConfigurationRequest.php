<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteChatControlsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class DeleteChatControlsConfigurationRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
