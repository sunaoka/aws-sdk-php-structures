<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\CreateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\SearchFilter|null $Filters
 * @property list<Shapes\IncludedProperty>|null $IncludedProperties
 * @property string|null $Scope
 * @property array<string, string>|null $Tags
 * @property string $ViewName
 */
class CreateViewRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Filters?: Shapes\SearchFilter|null,
     *     IncludedProperties?: list<Shapes\IncludedProperty>|null,
     *     Scope?: string|null,
     *     Tags?: array<string, string>|null,
     *     ViewName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
