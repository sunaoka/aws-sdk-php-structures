<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Options
 * @property string|null $Type
 */
class AwsEcsTaskDefinitionContainerDefinitionsFirelensConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Options?: array<string, string>|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
