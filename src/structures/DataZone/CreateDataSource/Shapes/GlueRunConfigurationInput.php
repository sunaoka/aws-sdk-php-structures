<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $autoImportDataQualityResult
 * @property string|null $catalogName
 * @property string|null $dataAccessRole
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class GlueRunConfigurationInput extends Shape
{
    /**
     * @param array{
     *     autoImportDataQualityResult?: bool|null,
     *     catalogName?: string|null,
     *     dataAccessRole?: string|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
