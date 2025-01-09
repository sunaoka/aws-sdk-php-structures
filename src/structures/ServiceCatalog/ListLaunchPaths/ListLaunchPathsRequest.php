<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListLaunchPaths;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ProductId
 * @property int $PageSize
 * @property string $PageToken
 */
class ListLaunchPathsRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ProductId: string,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
