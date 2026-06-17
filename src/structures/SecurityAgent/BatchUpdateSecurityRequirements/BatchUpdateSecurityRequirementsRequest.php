<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchUpdateSecurityRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 * @property list<Shapes\UpdateSecurityRequirementEntry> $securityRequirements
 */
class BatchUpdateSecurityRequirementsRequest extends Request
{
    /**
     * @param array{
     *     packId: string,
     *     securityRequirements: list<Shapes\UpdateSecurityRequirementEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
