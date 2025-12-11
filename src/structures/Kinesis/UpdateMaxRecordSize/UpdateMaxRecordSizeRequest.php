<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateMaxRecordSize;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamARN
 * @property int<1024, 10240> $MaxRecordSizeInKiB
 */
class UpdateMaxRecordSizeRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     MaxRecordSizeInKiB: int<1024, 10240>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
