<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\ListItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'OBJECT'|'FOLDER' $Type
 * @property string $ETag
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property string $ContentType
 * @property int<0, max> $ContentLength
 */
class Item extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: 'OBJECT'|'FOLDER',
     *     ETag?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     ContentType?: string,
     *     ContentLength?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
