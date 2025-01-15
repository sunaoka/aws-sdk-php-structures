<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListBudgetsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property string $ResourceId
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListBudgetsForResourceRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     ResourceId: string,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
