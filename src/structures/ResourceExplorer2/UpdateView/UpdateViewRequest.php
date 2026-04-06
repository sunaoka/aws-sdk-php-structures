<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SearchFilter|null $Filters
 * @property list<Shapes\IncludedProperty>|null $IncludedProperties
 * @property string $ViewArn
 */
class UpdateViewRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\SearchFilter|null,
     *     IncludedProperties?: list<Shapes\IncludedProperty>|null,
     *     ViewArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
