<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\DeleteQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $quickResponseId
 */
class DeleteQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     quickResponseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
