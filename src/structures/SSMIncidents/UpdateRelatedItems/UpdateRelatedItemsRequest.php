<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $incidentRecordArn
 * @property Shapes\RelatedItemsUpdate $relatedItemsUpdate
 */
class UpdateRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     incidentRecordArn: string,
     *     relatedItemsUpdate: Shapes\RelatedItemsUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
