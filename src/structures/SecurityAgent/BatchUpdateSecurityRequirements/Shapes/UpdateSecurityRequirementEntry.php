<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchUpdateSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $domain
 * @property string|null $evaluation
 * @property string|null $remediation
 */
class UpdateSecurityRequirementEntry extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     domain?: string|null,
     *     evaluation?: string|null,
     *     remediation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
