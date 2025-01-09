<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $MemberAccount
 * @property string $ResourceId
 * @property string $ResourceType
 * @property list<ResourceViolation> $ResourceViolations
 * @property list<Tag> $ResourceTags
 * @property string $ResourceDescription
 */
class ViolationDetail extends Shape
{
    /**
     * @param array{
     *     PolicyId: string,
     *     MemberAccount: string,
     *     ResourceId: string,
     *     ResourceType: string,
     *     ResourceViolations: list<ResourceViolation>,
     *     ResourceTags?: list<Tag>,
     *     ResourceDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
