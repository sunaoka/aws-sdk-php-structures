<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RegistryRecordsEntry> $entries
 */
class BatchGetDiscoverableRegistryRecordRequest extends Request
{
    /**
     * @param array{entries: list<Shapes\RegistryRecordsEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
