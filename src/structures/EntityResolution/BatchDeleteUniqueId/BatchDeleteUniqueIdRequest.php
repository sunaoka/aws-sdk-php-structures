<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputSource
 * @property list<string> $uniqueIds
 * @property string $workflowName
 */
class BatchDeleteUniqueIdRequest extends Request
{
    /**
     * @param array{
     *     inputSource?: string,
     *     uniqueIds: list<string>,
     *     workflowName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
