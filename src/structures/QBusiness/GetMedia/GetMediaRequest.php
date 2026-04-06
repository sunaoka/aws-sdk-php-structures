<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $conversationId
 * @property string $messageId
 * @property string $mediaId
 */
class GetMediaRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     conversationId: string,
     *     messageId: string,
     *     mediaId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
