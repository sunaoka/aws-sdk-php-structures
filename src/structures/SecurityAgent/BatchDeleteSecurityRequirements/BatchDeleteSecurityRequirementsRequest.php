<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteSecurityRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 * @property list<string> $securityRequirementNames
 */
class BatchDeleteSecurityRequirementsRequest extends Request
{
    /**
     * @param array{
     *     packId: string,
     *     securityRequirementNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
