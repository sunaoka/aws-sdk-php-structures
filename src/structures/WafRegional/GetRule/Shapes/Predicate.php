<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Negated
 * @property 'IPMatch'|'ByteMatch'|'SqlInjectionMatch'|'GeoMatch'|'SizeConstraint'|'XssMatch'|'RegexMatch' $Type
 * @property string $DataId
 */
class Predicate extends Shape
{
    /**
     * @param array{
     *     Negated: bool,
     *     Type: 'IPMatch'|'ByteMatch'|'SqlInjectionMatch'|'GeoMatch'|'SizeConstraint'|'XssMatch'|'RegexMatch',
     *     DataId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
