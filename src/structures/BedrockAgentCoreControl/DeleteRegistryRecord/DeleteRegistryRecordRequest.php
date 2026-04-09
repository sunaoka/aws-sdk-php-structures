<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 */
class DeleteRegistryRecordRequest extends Request
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
