<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateWhatsAppFlowAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $flowId
 * @property string|resource|\Psr\Http\Message\StreamInterface $flowJson
 */
class UpdateWhatsAppFlowAssetsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     flowId: string,
     *     flowJson: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
