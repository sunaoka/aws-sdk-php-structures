<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetConfigurationPolicyAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConfigurationPolicyAssociation $ConfigurationPolicyAssociationIdentifiers
 * @property string $ErrorCode
 * @property string $ErrorReason
 */
class UnprocessedConfigurationPolicyAssociation extends Shape
{
    /**
     * @param array{
     *     ConfigurationPolicyAssociationIdentifiers?: ConfigurationPolicyAssociation,
     *     ErrorCode?: string,
     *     ErrorReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
