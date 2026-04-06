<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property bool|null $autoImportDataQualityResult
 * @property string|null $catalogName
 * @property string|null $dataAccessRole
 * @property string|null $region
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class GlueRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     autoImportDataQualityResult?: bool|null,
     *     catalogName?: string|null,
     *     dataAccessRole?: string|null,
     *     region?: string|null,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
