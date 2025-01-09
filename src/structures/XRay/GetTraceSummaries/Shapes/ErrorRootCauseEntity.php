<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<RootCauseException> $Exceptions
 * @property bool $Remote
 */
class ErrorRootCauseEntity extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Exceptions?: list<RootCauseException>,
     *     Remote?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
