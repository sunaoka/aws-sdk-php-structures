<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $region
 * @property string|null $dataAccessRole
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 * @property bool|null $autoImportDataQualityResult
 * @property string|null $catalogName
 */
class GlueRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     region?: string|null,
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
