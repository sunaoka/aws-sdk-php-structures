<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $sequenceStoreId
 * @property 'SOURCE1'|'SOURCE2'|'INDEX' $file
 * @property int<1, 10000> $partNumber
 */
class GetReadSetRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     sequenceStoreId: string,
     *     file?: 'SOURCE1'|'SOURCE2'|'INDEX',
     *     partNumber: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
