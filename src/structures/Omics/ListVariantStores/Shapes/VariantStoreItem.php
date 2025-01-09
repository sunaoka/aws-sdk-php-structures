<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property ReferenceItem $reference
 * @property 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED' $status
 * @property string $storeArn
 * @property string $name
 * @property string $description
 * @property SseConfig $sseConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $statusMessage
 * @property int $storeSizeBytes
 */
class VariantStoreItem extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     reference: ReferenceItem,
     *     status: 'CREATING'|'UPDATING'|'DELETING'|'ACTIVE'|'FAILED',
     *     storeArn: string,
     *     name: string,
     *     description: string,
     *     sseConfig: SseConfig,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     statusMessage: string,
     *     storeSizeBytes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
