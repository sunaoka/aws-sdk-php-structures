<?php

namespace Sunaoka\Aws\Structures\QConnect\StartContentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $contentType
 * @property int<1, 60>|null $presignedUrlTimeToLive
 */
class StartContentUploadRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     contentType: string,
     *     presignedUrlTimeToLive?: int<1, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
