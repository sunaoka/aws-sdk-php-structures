<?php

namespace Sunaoka\Aws\Structures\Glue\GetTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsProtected
 * @property string|null $Definer
 * @property int<-1, max>|null $ViewVersionId
 * @property string|null $ViewVersionToken
 * @property int|null $RefreshSeconds
 * @property 'FULL'|'INCREMENTAL'|null $LastRefreshType
 * @property list<string>|null $SubObjects
 * @property list<int<-1, max>>|null $SubObjectVersionIds
 * @property list<ViewRepresentation>|null $Representations
 */
class ViewDefinition extends Shape
{
    /**
     * @param array{
     *     IsProtected?: bool|null,
     *     Definer?: string|null,
     *     ViewVersionId?: int<-1, max>|null,
     *     ViewVersionToken?: string|null,
     *     RefreshSeconds?: int|null,
     *     LastRefreshType?: 'FULL'|'INCREMENTAL'|null,
     *     SubObjects?: list<string>|null,
     *     SubObjectVersionIds?: list<int<-1, max>>|null,
     *     Representations?: list<ViewRepresentation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
