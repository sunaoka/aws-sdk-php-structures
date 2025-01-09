<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $position
 * @property int $limit
 * @property string $nameQuery
 * @property string $customerId
 * @property bool $includeValues
 */
class GetApiKeysRequest extends Request
{
    /**
     * @param array{
     *     position?: string,
     *     limit?: int,
     *     nameQuery?: string,
     *     customerId?: string,
     *     includeValues?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
