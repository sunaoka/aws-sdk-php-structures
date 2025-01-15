<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyId
 * @property string $MemberAccount
 * @property string $ResourceId
 * @property string $ResourceType
 * @property list<ResourceViolation> $ResourceViolations
 * @property list<Tag>|null $ResourceTags
 * @property string|null $ResourceDescription
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
     *     ResourceTags?: list<Tag>|null,
     *     ResourceDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
