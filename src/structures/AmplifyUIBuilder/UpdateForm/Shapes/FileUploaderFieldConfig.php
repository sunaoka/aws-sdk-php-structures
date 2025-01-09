<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'public'|'protected'|'private' $accessLevel
 * @property list<string> $acceptedFileTypes
 * @property bool $showThumbnails
 * @property bool $isResumable
 * @property int $maxFileCount
 * @property int $maxSize
 */
class FileUploaderFieldConfig extends Shape
{
    /**
     * @param array{
     *     accessLevel: 'public'|'protected'|'private',
     *     acceptedFileTypes: list<string>,
     *     showThumbnails?: bool,
     *     isResumable?: bool,
     *     maxFileCount?: int,
     *     maxSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
