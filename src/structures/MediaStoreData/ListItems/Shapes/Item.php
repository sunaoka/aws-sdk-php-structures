<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\ListItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'OBJECT'|'FOLDER'|null $Type
 * @property string|null $ETag
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $ContentType
 * @property int<0, max>|null $ContentLength
 */
class Item extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: 'OBJECT'|'FOLDER'|null,
     *     ETag?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     ContentType?: string|null,
     *     ContentLength?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
