<?php

namespace Sunaoka\Aws\Structures\Omics\GetReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $referenceStoreId
 * @property string|null $range
 * @property int<1, 10000> $partNumber
 * @property 'SOURCE'|'INDEX'|null $file
 */
class GetReferenceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     referenceStoreId: string,
     *     range?: string|null,
     *     partNumber: int<1, 10000>,
     *     file?: 'SOURCE'|'INDEX'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
