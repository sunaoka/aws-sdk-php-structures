<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartCacheReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UploadState'|'UploadFailureReason' $Name
 * @property list<string> $Values
 */
class CacheReportFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'UploadState'|'UploadFailureReason',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
