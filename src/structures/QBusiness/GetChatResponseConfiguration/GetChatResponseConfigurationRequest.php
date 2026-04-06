<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatResponseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $chatResponseConfigurationId
 */
class GetChatResponseConfigurationRequest extends Request
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
