<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetApiKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $position
 * @property int|null $limit
 * @property string|null $nameQuery
 * @property string|null $customerId
 * @property bool|null $includeValues
 */
class GetApiKeysRequest extends Request
{
    /**
     * @param array{
     *     position?: string|null,
     *     limit?: int|null,
     *     nameQuery?: string|null,
     *     customerId?: string|null,
     *     includeValues?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
