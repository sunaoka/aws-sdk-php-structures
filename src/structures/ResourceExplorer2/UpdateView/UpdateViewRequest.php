<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchFilter $Filters
 * @property list<Shapes\IncludedProperty> $IncludedProperties
 * @property string $ViewArn
 */
class UpdateViewRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\SearchFilter,
     *     IncludedProperties?: list<Shapes\IncludedProperty>,
     *     ViewArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
