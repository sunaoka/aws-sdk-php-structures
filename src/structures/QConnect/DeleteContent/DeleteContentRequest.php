<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $contentId
 */
class DeleteContentRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     contentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
