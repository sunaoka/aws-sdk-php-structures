<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\StartContentUpload;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentType
 * @property string $knowledgeBaseId
 */
class StartContentUploadRequest extends Request
{
    /**
     * @param array{
     *     contentType: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
