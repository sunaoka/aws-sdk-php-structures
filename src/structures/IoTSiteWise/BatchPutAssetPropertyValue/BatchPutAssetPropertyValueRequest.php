<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchPutAssetPropertyValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PutAssetPropertyValueEntry> $entries
 */
class BatchPutAssetPropertyValueRequest extends Request
{
    /**
     * @param array{entries: list<Shapes\PutAssetPropertyValueEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
