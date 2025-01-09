<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateHITType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $AutoApprovalDelayInSeconds
 * @property int $AssignmentDurationInSeconds
 * @property string $Reward
 * @property string $Title
 * @property string $Keywords
 * @property string $Description
 * @property list<Shapes\QualificationRequirement> $QualificationRequirements
 */
class CreateHITTypeRequest extends Request
{
    /**
     * @param array{
     *     AutoApprovalDelayInSeconds?: int,
     *     AssignmentDurationInSeconds: int,
     *     Reward: string,
     *     Title: string,
     *     Keywords?: string,
     *     Description: string,
     *     QualificationRequirements?: list<Shapes\QualificationRequirement>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
