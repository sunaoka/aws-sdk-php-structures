<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PutAssetPropertyValueEntry> $putAssetPropertyValueEntries
 * @property string $roleArn
 */
class IotSiteWiseAction extends Shape
{
    /**
     * @param array{
     *     putAssetPropertyValueEntries: list<PutAssetPropertyValueEntry>,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
