<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceLocationArn
 * @property string|null $Handler
 * @property list<string>|null $BlueprintTypes
 * @property list<Dependency>|null $Dependencies
 */
class CanaryCodeOutput extends Shape
{
    /**
     * @param array{
     *     SourceLocationArn?: string|null,
     *     Handler?: string|null,
     *     BlueprintTypes?: list<string>|null,
     *     Dependencies?: list<Dependency>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
