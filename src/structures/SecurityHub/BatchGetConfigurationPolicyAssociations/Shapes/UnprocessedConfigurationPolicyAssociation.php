<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationPolicyAssociation|null $ConfigurationPolicyAssociationIdentifiers
 * @property string|null $ErrorCode
 * @property string|null $ErrorReason
 */
class UnprocessedConfigurationPolicyAssociation extends Shape
{
    /**
     * @param array{
     *     ConfigurationPolicyAssociationIdentifiers?: ConfigurationPolicyAssociation|null,
     *     ErrorCode?: string|null,
     *     ErrorReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
