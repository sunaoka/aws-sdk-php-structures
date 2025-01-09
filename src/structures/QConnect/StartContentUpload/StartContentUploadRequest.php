<?php

namespace Sunaoka\Aws\Structures\QConnect\StartContentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentType
 * @property string $knowledgeBaseId
 * @property int<1, 60> $presignedUrlTimeToLive
 */
class StartContentUploadRequest extends Request
{
    /**
     * @param array{
     *     contentType: string,
     *     knowledgeBaseId: string,
     *     presignedUrlTimeToLive?: int<1, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
