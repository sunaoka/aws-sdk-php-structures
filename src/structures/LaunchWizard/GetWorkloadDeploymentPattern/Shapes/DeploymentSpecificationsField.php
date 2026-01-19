<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $allowedValues
 * @property string|null $required
 * @property list<DeploymentConditionalField>|null $conditionals
 */
class DeploymentSpecificationsField extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     allowedValues?: list<string>|null,
     *     required?: string|null,
     *     conditionals?: list<DeploymentConditionalField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
