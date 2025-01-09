<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportDestinationConfiguration $S3
 */
class ExportDestinationConfiguration extends Shape
{
    /**
     * @param array{S3?: S3ExportDestinationConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
