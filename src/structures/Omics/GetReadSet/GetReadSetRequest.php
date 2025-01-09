<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $sequenceStoreId
 * @property 'SOURCE1'|'SOURCE2'|'INDEX' $file
 * @property int $partNumber
 */
class GetReadSetRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     sequenceStoreId: string,
     *     file?: 'SOURCE1'|'SOURCE2'|'INDEX',
     *     partNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
