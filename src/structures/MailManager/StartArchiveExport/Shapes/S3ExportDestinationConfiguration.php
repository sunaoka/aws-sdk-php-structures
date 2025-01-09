<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Location
 */
class S3ExportDestinationConfiguration extends Shape
{
    /**
     * @param array{S3Location?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
