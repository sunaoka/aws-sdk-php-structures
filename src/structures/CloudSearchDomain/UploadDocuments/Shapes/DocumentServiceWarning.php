<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\UploadDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class DocumentServiceWarning extends Shape
{
    /**
     * @param array{message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
