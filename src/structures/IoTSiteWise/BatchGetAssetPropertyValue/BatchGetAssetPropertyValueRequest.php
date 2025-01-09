<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetAssetPropertyValueEntry> $entries
 * @property string $nextToken
 */
class BatchGetAssetPropertyValueRequest extends Request
{
    /**
     * @param array{
     *     entries: list<Shapes\BatchGetAssetPropertyValueEntry>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
