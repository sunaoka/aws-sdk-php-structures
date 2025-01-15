<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Add
 * @property list<string>|null $Drop
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersCapabilitiesDetails extends Shape
{
    /**
     * @param array{
     *     Add?: list<string>|null,
     *     Drop?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
