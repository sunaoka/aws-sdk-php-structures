<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property list<Shapes\Item> $items
 */
class PutItemsRequest extends Request
{
    /**
     * @param array{
     *     datasetArn: string,
     *     items: list<Shapes\Item>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
