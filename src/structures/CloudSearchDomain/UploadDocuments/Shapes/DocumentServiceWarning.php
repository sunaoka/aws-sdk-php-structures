<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\UploadDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 */
class DocumentServiceWarning extends Shape
{
    /**
     * @param array{message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
