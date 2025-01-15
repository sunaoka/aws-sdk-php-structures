<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageUri
 * @property list<string>|null $ContainerEntrypoint
 * @property list<string>|null $ContainerArguments
 */
class AppSpecification extends Shape
{
    /**
     * @param array{
     *     ImageUri: string,
     *     ContainerEntrypoint?: list<string>|null,
     *     ContainerArguments?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
