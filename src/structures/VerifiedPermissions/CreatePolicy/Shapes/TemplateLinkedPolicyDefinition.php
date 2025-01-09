<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyTemplateId
 * @property EntityIdentifier $principal
 * @property EntityIdentifier $resource
 */
class TemplateLinkedPolicyDefinition extends Shape
{
    /**
     * @param array{
     *     policyTemplateId: string,
     *     principal?: EntityIdentifier,
     *     resource?: EntityIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
