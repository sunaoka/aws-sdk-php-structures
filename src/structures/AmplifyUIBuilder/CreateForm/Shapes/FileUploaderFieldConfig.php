<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'public'|'protected'|'private' $accessLevel
 * @property list<string> $acceptedFileTypes
 * @property bool|null $showThumbnails
 * @property bool|null $isResumable
 * @property int|null $maxFileCount
 * @property int|null $maxSize
 */
class FileUploaderFieldConfig extends Shape
{
    /**
     * @param array{
     *     accessLevel: 'public'|'protected'|'private',
     *     acceptedFileTypes: list<string>,
     *     showThumbnails?: bool|null,
     *     isResumable?: bool|null,
     *     maxFileCount?: int|null,
     *     maxSize?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
