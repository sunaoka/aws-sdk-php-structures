<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatResponseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $chatResponseConfigurationId
 * @property string|null $displayName
 * @property array<'ALL', Shapes\ResponseConfiguration> $responseConfigurations
 * @property string|null $clientToken
 */
class UpdateChatResponseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     chatResponseConfigurationId: string,
     *     displayName?: string|null,
     *     responseConfigurations: array<'ALL', Shapes\ResponseConfiguration>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
