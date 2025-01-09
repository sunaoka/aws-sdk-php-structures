<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $conversationId
 * @property string $message
 * @property bool $enableTrace
 */
class InvokeAssistantRequest extends Request
{
    /**
     * @param array{
     *     conversationId?: string,
     *     message: string,
     *     enableTrace?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
