<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ReadOnly
 * @property string $SourceContainer
 */
class AwsEcsTaskDefinitionContainerDefinitionsVolumesFromDetails extends Shape
{
    /**
     * @param array{
     *     ReadOnly?: bool,
     *     SourceContainer?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
