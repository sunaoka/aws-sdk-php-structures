<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PlainText'|'SSML'|'CustomPayload' $contentType
 * @property string $content
 * @property int<1, 5>|null $groupNumber
 */
class Message extends Shape
{
    /**
     * @param array{
     *     contentType: 'PlainText'|'SSML'|'CustomPayload',
     *     content: string,
     *     groupNumber?: int<1, 5>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
