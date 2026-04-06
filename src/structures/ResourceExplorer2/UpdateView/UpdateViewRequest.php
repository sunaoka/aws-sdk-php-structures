<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ViewArn
 * @property list<Shapes\IncludedProperty>|null $IncludedProperties
 * @property Shapes\SearchFilter|null $Filters
 */
class UpdateViewRequest extends Request
{
    /**
     * @param array{
     *     ViewArn: string,
     *     IncludedProperties?: list<Shapes\IncludedProperty>|null,
     *     Filters?: Shapes\SearchFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
