<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 * @property list<Shapes\DatasetAction> $actions
 * @property list<Shapes\DatasetTrigger> $triggers
 * @property list<Shapes\DatasetContentDeliveryRule> $contentDeliveryRules
 * @property Shapes\RetentionPeriod $retentionPeriod
 * @property Shapes\VersioningConfiguration $versioningConfiguration
 * @property list<Shapes\Tag> $tags
 * @property list<Shapes\LateDataRule> $lateDataRules
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     datasetName: string,
     *     actions: list<Shapes\DatasetAction>,
     *     triggers?: list<Shapes\DatasetTrigger>,
     *     contentDeliveryRules?: list<Shapes\DatasetContentDeliveryRule>,
     *     retentionPeriod?: Shapes\RetentionPeriod,
     *     versioningConfiguration?: Shapes\VersioningConfiguration,
     *     tags?: list<Shapes\Tag>,
     *     lateDataRules?: list<Shapes\LateDataRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
