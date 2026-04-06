<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNDETERMINED'|'TRANSIENT'|'PERMANENT'|null $BounceType
 * @property string|null $BounceSubType
 * @property string|null $DiagnosticCode
 */
class Bounce extends Shape
{
    /**
     * @param array{
     *     BounceType?: 'UNDETERMINED'|'TRANSIENT'|'PERMANENT'|null,
     *     BounceSubType?: string|null,
     *     DiagnosticCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
