<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS' $Domain
 * @property 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA' $DatasetType
 * @property string|null $DataFrequency
 * @property Shapes\Schema $Schema
 * @property Shapes\EncryptionConfig|null $EncryptionConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     Domain: 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS',
     *     DatasetType: 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA',
     *     DataFrequency?: string|null,
     *     Schema: Shapes\Schema,
     *     EncryptionConfig?: Shapes\EncryptionConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
