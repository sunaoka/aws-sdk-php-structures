<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditSuppressions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 * @property bool $ascendingOrder
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAuditSuppressionsRequest extends Request
{
    /**
     * @param array{
     *     checkName?: string,
     *     resourceIdentifier?: Shapes\ResourceIdentifier,
     *     ascendingOrder?: bool,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
