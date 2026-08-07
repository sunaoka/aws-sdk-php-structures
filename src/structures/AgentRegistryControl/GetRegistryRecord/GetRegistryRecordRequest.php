<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 */
class GetRegistryRecordRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     recordId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
