<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteChatResponseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $chatResponseConfigurationId
 */
class DeleteChatResponseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     chatResponseConfigurationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
