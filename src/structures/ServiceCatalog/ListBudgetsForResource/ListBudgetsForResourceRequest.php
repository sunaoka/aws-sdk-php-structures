<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListBudgetsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property string $ResourceId
 * @property int $PageSize
 * @property string $PageToken
 */
class ListBudgetsForResourceRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     ResourceId: string,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
