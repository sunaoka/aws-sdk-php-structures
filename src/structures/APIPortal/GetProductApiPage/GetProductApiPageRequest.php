<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductApiPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string $productApiPageId
 * @property string|null $resourceOwnerAccountId
 * @property bool|null $includeRawDisplayContent
 */
class GetProductApiPageRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     productApiPageId: string,
     *     resourceOwnerAccountId?: string|null,
     *     includeRawDisplayContent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
