<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<RootCauseException>|null $Exceptions
 * @property bool|null $Remote
 */
class ErrorRootCauseEntity extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Exceptions?: list<RootCauseException>|null,
     *     Remote?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
