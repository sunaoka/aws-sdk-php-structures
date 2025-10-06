<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ViewName
 * @property list<Shapes\IncludedProperty>|null $IncludedProperties
 * @property string|null $Scope
 * @property Shapes\SearchFilter|null $Filters
 * @property array<string, string>|null $Tags
 */
class CreateViewRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ViewName: string,
     *     IncludedProperties?: list<Shapes\IncludedProperty>|null,
     *     Scope?: string|null,
     *     Filters?: Shapes\SearchFilter|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
