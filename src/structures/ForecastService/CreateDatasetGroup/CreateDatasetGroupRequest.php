<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetGroupName
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS' $Domain
 * @property list<string> $DatasetArns
 * @property list<Shapes\Tag> $Tags
 */
class CreateDatasetGroupRequest extends Request
{
    /**
     * @param array{
     *     DatasetGroupName: string,
     *     Domain: 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS',
     *     DatasetArns?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
