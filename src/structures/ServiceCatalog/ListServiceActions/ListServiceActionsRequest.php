<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListServiceActionsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
