<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property int|null $displayOrder
 * @property string|null $displayDescription
 * @property 'STRING'|'NUMBER'|'ARRAY'|'BOOLEAN'|null $type
 * @property ActionPayloadFieldValue|null $value
 * @property list<ActionReviewPayloadFieldAllowedValue>|null $allowedValues
 * @property string|null $allowedFormat
 * @property ActionReviewPayloadFieldArrayItemJsonSchema|null $arrayItemJsonSchema
 * @property bool|null $required
 */
class ActionReviewPayloadField extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     displayOrder?: int|null,
     *     displayDescription?: string|null,
     *     type?: 'STRING'|'NUMBER'|'ARRAY'|'BOOLEAN'|null,
     *     value?: ActionPayloadFieldValue|null,
     *     allowedValues?: list<ActionReviewPayloadFieldAllowedValue>|null,
     *     allowedFormat?: string|null,
     *     arrayItemJsonSchema?: ActionReviewPayloadFieldArrayItemJsonSchema|null,
     *     required?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
