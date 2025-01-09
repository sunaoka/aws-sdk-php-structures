<?php

namespace Sunaoka\Aws\Structures\ConnectCases\PutCaseEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property Shapes\EventBridgeConfiguration $eventBridge
 */
class PutCaseEventConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     eventBridge: Shapes\EventBridgeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
