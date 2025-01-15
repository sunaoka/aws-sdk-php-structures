<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property list<Shapes\BatchReadOperation> $Operations
 * @property 'SERIALIZABLE'|'EVENTUAL'|null $ConsistencyLevel
 */
class BatchReadRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     Operations: list<Shapes\BatchReadOperation>,
     *     ConsistencyLevel?: 'SERIALIZABLE'|'EVENTUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
