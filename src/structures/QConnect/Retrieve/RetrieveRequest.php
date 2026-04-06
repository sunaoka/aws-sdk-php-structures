<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property Shapes\RetrievalConfiguration $retrievalConfiguration
 * @property string $retrievalQuery
 */
class RetrieveRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     retrievalConfiguration: Shapes\RetrievalConfiguration,
     *     retrievalQuery: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
