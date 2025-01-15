<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $AutoApprovalDelayInSeconds
 * @property int $AssignmentDurationInSeconds
 * @property string $Reward
 * @property string $Title
 * @property string|null $Keywords
 * @property string $Description
 * @property list<Shapes\QualificationRequirement>|null $QualificationRequirements
 */
class CreateHITTypeRequest extends Request
{
    /**
     * @param array{
     *     AutoApprovalDelayInSeconds?: int|null,
     *     AssignmentDurationInSeconds: int,
     *     Reward: string,
     *     Title: string,
     *     Keywords?: string|null,
     *     Description: string,
     *     QualificationRequirements?: list<Shapes\QualificationRequirement>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
