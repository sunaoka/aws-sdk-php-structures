<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $autoImportDataQualityResult
 * @property string $catalogName
 * @property string $dataAccessRole
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class GlueRunConfigurationInput extends Shape
{
    /**
     * @param array{
     *     autoImportDataQualityResult?: bool,
     *     catalogName?: string,
     *     dataAccessRole?: string,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
