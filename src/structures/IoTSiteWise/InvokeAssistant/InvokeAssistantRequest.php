<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $conversationId
 * @property string $message
 * @property bool|null $enableTrace
 */
class InvokeAssistantRequest extends Request
{
    /**
     * @param array{
     *     conversationId?: string|null,
     *     message: string,
     *     enableTrace?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
