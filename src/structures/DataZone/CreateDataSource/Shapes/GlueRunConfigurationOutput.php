<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property bool $autoImportDataQualityResult
 * @property string $catalogName
 * @property string $dataAccessRole
 * @property string $region
 * @property list<RelationalFilterConfiguration> $relationalFilterConfigurations
 */
class GlueRunConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     autoImportDataQualityResult?: bool,
     *     catalogName?: string,
     *     dataAccessRole?: string,
     *     region?: string,
     *     relationalFilterConfigurations: list<RelationalFilterConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
