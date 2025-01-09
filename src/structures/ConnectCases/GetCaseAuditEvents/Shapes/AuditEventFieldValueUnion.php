<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $booleanValue
 * @property double $doubleValue
 * @property EmptyFieldValue $emptyValue
 * @property string $stringValue
 * @property string $userArnValue
 */
class AuditEventFieldValueUnion extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool,
     *     doubleValue?: double,
     *     emptyValue?: EmptyFieldValue,
     *     stringValue?: string,
     *     userArnValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
