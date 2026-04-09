<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SubmitRegistryRecordForApproval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 */
class SubmitRegistryRecordForApprovalRequest extends Request
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
