<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Location
 */
class S3ExportDestinationConfiguration extends Shape
{
    /**
     * @param array{S3Location?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
