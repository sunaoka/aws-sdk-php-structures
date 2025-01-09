<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property list<string> $ContainerEntrypoint
 * @property list<string> $ContainerArguments
 */
class AppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ContainerEntrypoint?: list<string>,
     *     ContainerArguments?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
