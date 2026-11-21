<?php

namespace Sunaoka\Aws\Structures\APIPortal\AssociateManagedApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property list<string> $managedApiIds
 */
class AssociateManagedApisRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     managedApiIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
