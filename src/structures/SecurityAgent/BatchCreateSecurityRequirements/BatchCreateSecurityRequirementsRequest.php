<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchCreateSecurityRequirements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $packId
 * @property list<Shapes\CreateSecurityRequirementEntry> $securityRequirements
 */
class BatchCreateSecurityRequirementsRequest extends Request
{
    /**
     * @param array{
     *     packId: string,
     *     securityRequirements: list<Shapes\CreateSecurityRequirementEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
