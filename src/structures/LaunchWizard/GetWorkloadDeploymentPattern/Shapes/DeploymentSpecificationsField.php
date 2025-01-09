<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedValues
 * @property list<DeploymentConditionalField> $conditionals
 * @property string $description
 * @property string $name
 * @property string $required
 */
class DeploymentSpecificationsField extends Shape
{
    /**
     * @param array{
     *     allowedValues?: list<string>,
     *     conditionals?: list<DeploymentConditionalField>,
     *     description?: string,
     *     name?: string,
     *     required?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
