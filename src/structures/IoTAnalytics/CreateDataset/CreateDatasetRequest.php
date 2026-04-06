<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property list<Shapes\DatasetAction> $actions
 * @property list<Shapes\DatasetTrigger>|null $triggers
 * @property list<Shapes\DatasetContentDeliveryRule>|null $contentDeliveryRules
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property Shapes\VersioningConfiguration|null $versioningConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\LateDataRule>|null $lateDataRules
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetName: string,
     *     actions: list<Shapes\DatasetAction>,
     *     triggers?: list<Shapes\DatasetTrigger>|null,
     *     contentDeliveryRules?: list<Shapes\DatasetContentDeliveryRule>|null,
     *     retentionPeriod?: Shapes\RetentionPeriod|null,
     *     versioningConfiguration?: Shapes\VersioningConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     lateDataRules?: list<Shapes\LateDataRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
