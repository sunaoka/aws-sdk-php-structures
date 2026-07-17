<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerManagedAwsSecretConfigurationInput|null $customerManagedAwsSecret
 */
class AdminPasswordSourceConfigurationInput extends Shape
{
    /**
     * @param array{customerManagedAwsSecret?: CustomerManagedAwsSecretConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
