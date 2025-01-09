<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\SearchFilter $Filters
 * @property list<Shapes\IncludedProperty> $IncludedProperties
 * @property string $Scope
 * @property array<string, string> $Tags
 * @property string $ViewName
 */
class CreateViewRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Filters?: Shapes\SearchFilter,
     *     IncludedProperties?: list<Shapes\IncludedProperty>,
     *     Scope?: string,
     *     Tags?: array<string, string>,
     *     ViewName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
