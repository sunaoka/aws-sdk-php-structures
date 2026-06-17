<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchCreateSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $domain
 * @property string $evaluation
 * @property string|null $remediation
 */
class CreateSecurityRequirementEntry extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description: string,
     *     domain: string,
     *     evaluation: string,
     *     remediation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
