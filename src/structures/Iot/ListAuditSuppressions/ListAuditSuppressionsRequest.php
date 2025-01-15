<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $checkName
 * @property Shapes\ResourceIdentifier|null $resourceIdentifier
 * @property bool|null $ascendingOrder
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAuditSuppressionsRequest extends Request
{
    /**
     * @param array{
     *     checkName?: string|null,
     *     resourceIdentifier?: Shapes\ResourceIdentifier|null,
     *     ascendingOrder?: bool|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
