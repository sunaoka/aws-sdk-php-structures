<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListLaunchPaths;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ProductId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListLaunchPathsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ProductId: string,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
