<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentId
 * @property string $knowledgeBaseId
 */
class DeleteContentRequest extends Request
{
    /**
     * @param array{
     *     contentId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
