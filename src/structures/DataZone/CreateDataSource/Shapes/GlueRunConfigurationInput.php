<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataAccessRole
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 * @property bool|null $autoImportDataQualityResult
 * @property string|null $catalogName
 */
class GlueRunConfigurationInput extends Shape
{
    /**
     * @param array{
     *     dataAccessRole?: string|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>,
     *     autoImportDataQualityResult?: bool|null,
     *     catalogName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
