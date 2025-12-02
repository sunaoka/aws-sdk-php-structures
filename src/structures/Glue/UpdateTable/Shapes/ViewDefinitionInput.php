<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsProtected
 * @property string|null $Definer
 * @property list<ViewRepresentationInput>|null $Representations
 * @property int<-1, max>|null $ViewVersionId
 * @property string|null $ViewVersionToken
 * @property int|null $RefreshSeconds
 * @property 'FULL'|'INCREMENTAL'|null $LastRefreshType
 * @property list<string>|null $SubObjects
 * @property list<int<-1, max>>|null $SubObjectVersionIds
 */
class ViewDefinitionInput extends Shape
{
    /**
     * @param array{
     *     IsProtected?: bool|null,
     *     Definer?: string|null,
     *     Representations?: list<ViewRepresentationInput>|null,
     *     ViewVersionId?: int<-1, max>|null,
     *     ViewVersionToken?: string|null,
     *     RefreshSeconds?: int|null,
     *     LastRefreshType?: 'FULL'|'INCREMENTAL'|null,
     *     SubObjects?: list<string>|null,
     *     SubObjectVersionIds?: list<int<-1, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
