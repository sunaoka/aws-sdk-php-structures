<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreatePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AdminUsers
 * @property array<string, string>|null $Arguments
 */
class PartnerAppConfig extends Shape
{
    /**
     * @param array{
     *     AdminUsers?: list<string>|null,
     *     Arguments?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
