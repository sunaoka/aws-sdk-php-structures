<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListServiceActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property int<0, 20> $PageSize
 * @property string $PageToken
 */
class ListServiceActionsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     PageSize?: int<0, 20>,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
