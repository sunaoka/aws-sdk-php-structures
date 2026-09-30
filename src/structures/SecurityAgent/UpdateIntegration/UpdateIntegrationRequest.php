<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationId
 * @property 'CREATE_IF_ABSENT'|'ROTATE' $webhookAction
 */
class UpdateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationId: string,
     *     webhookAction: 'CREATE_IF_ABSENT'|'ROTATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
