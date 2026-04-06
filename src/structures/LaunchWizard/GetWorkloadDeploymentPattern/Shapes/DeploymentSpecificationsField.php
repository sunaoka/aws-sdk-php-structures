<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedValues
 * @property list<DeploymentConditionalField>|null $conditionals
 * @property string|null $description
 * @property string|null $name
 * @property string|null $required
 */
class DeploymentSpecificationsField extends Shape
{
    /**
     * @param array{
     *     allowedValues?: list<string>|null,
     *     conditionals?: list<DeploymentConditionalField>|null,
     *     description?: string|null,
     *     name?: string|null,
     *     required?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
