<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateIntentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PlainText'|'SSML'|'CustomPayload' $contentType
 * @property string $content
 * @property int $groupNumber
 */
class Message extends Shape
{
    /**
     * @param array{
     *     contentType: 'PlainText'|'SSML'|'CustomPayload',
     *     content: string,
     *     groupNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
