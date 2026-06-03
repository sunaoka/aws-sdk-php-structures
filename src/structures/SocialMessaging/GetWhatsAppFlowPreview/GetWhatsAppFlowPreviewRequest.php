<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlowPreview;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $flowId
 * @property bool|null $invalidate
 */
class GetWhatsAppFlowPreviewRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     flowId: string,
     *     invalidate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
