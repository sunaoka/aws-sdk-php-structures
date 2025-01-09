<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Options
 * @property string $Type
 */
class AwsEcsTaskDefinitionContainerDefinitionsFirelensConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Options?: array<string, string>,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
