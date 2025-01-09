<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetContentSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contentId
 * @property string $knowledgeBaseId
 */
class GetContentSummaryRequest extends Request
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
