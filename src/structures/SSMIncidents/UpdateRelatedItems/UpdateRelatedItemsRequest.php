<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateRelatedItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $incidentRecordArn
 * @property Shapes\RelatedItemsUpdate $relatedItemsUpdate
 */
class UpdateRelatedItemsRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     incidentRecordArn: string,
     *     relatedItemsUpdate: Shapes\RelatedItemsUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
