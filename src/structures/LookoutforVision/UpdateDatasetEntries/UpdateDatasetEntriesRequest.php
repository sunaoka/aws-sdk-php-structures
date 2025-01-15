<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\UpdateDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property string|resource|\Psr\Http\Message\StreamInterface $Changes
 * @property string|null $ClientToken
 */
class UpdateDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     Changes: string|resource|\Psr\Http\Message\StreamInterface,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
