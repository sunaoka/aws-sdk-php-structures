<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $booleanValue
 * @property double|null $doubleValue
 * @property EmptyFieldValue|null $emptyValue
 * @property string|null $stringValue
 * @property string|null $userArnValue
 */
class FieldValueUnion extends Shape
{
    /**
     * @param array{
     *     booleanValue?: bool|null,
     *     doubleValue?: double|null,
     *     emptyValue?: EmptyFieldValue|null,
     *     stringValue?: string|null,
     *     userArnValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
