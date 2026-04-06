<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property double|null $doubleValue
 * @property bool|null $booleanValue
 * @property EmptyFieldValue|null $emptyValue
 * @property string|null $userArnValue
 */
class FieldValueUnion extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     doubleValue?: double|null,
     *     booleanValue?: bool|null,
     *     emptyValue?: EmptyFieldValue|null,
     *     userArnValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
