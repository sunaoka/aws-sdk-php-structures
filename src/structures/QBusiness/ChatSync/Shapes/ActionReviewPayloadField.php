<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property int $displayOrder
 * @property string $displayDescription
 * @property 'STRING'|'NUMBER'|'ARRAY'|'BOOLEAN' $type
 * @property ActionPayloadFieldValue $value
 * @property list<ActionReviewPayloadFieldAllowedValue> $allowedValues
 * @property string $allowedFormat
 * @property ActionReviewPayloadFieldArrayItemJsonSchema $arrayItemJsonSchema
 * @property bool $required
 */
class ActionReviewPayloadField extends Shape
{
    /**
     * @param array{
     *     displayName?: string,
     *     displayOrder?: int,
     *     displayDescription?: string,
     *     type?: 'STRING'|'NUMBER'|'ARRAY'|'BOOLEAN',
     *     value?: ActionPayloadFieldValue,
     *     allowedValues?: list<ActionReviewPayloadFieldAllowedValue>,
     *     allowedFormat?: string,
     *     arrayItemJsonSchema?: ActionReviewPayloadFieldArrayItemJsonSchema,
     *     required?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
