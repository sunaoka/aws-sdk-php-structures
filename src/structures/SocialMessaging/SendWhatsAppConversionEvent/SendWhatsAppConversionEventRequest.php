<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\SendWhatsAppConversionEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $datasetId
 * @property string|resource|\Psr\Http\Message\StreamInterface $eventData
 */
class SendWhatsAppConversionEventRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     datasetId: string,
     *     eventData: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
