<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enableIdentityCenter
 * @property bool|null $identityCenterApplicationAssignmentRequired
 * @property string|null $identityCenterInstanceARN
 * @property string|null $emrIdentityCenterApplicationARN
 */
class IdentityCenterConfiguration extends Shape
{
    /**
     * @param array{
     *     enableIdentityCenter?: bool|null,
     *     identityCenterApplicationAssignmentRequired?: bool|null,
     *     identityCenterInstanceARN?: string|null,
     *     emrIdentityCenterApplicationARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
