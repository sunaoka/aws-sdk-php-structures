<?php

namespace Sunaoka\Aws\Structures\QConnect\GetQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quickResponseId
 * @property string $knowledgeBaseId
 */
class GetQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     quickResponseId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
