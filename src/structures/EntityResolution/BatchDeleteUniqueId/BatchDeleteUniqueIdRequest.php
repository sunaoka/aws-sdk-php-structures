<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 * @property string|null $inputSource
 * @property list<string> $uniqueIds
 */
class BatchDeleteUniqueIdRequest extends Request
{
    /**
     * @param array{
     *     workflowName: string,
     *     inputSource?: string|null,
     *     uniqueIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
