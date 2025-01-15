<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ReadOnly
 * @property string|null $SourceContainer
 */
class AwsEcsTaskDefinitionContainerDefinitionsVolumesFromDetails extends Shape
{
    /**
     * @param array{
     *     ReadOnly?: bool|null,
     *     SourceContainer?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
