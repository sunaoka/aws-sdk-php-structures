<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Add
 * @property list<string> $Drop
 */
class AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersCapabilitiesDetails extends Shape
{
    /**
     * @param array{
     *     Add?: list<string>,
     *     Drop?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
