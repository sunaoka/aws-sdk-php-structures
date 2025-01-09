<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UNDETERMINED'|'TRANSIENT'|'PERMANENT' $BounceType
 * @property string $BounceSubType
 * @property string $DiagnosticCode
 */
class Bounce extends Shape
{
    /**
     * @param array{
     *     BounceType?: 'UNDETERMINED'|'TRANSIENT'|'PERMANENT',
     *     BounceSubType?: string,
     *     DiagnosticCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
