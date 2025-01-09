<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\StartContentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentType
 * @property string $knowledgeBaseId
 * @property int $presignedUrlTimeToLive
 */
class StartContentUploadRequest extends Request
{
    /**
     * @param array{
     *     contentType: string,
     *     knowledgeBaseId: string,
     *     presignedUrlTimeToLive?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
