<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Api
 * @property string|null $AffectedBucket
 * @property string|null $OtherS3Activity
 * @property string|null $NonS3Activity
 * @property string|null $SessionAssessment
 * @property int<0, max>|null $EventCount
 * @property InvestigationActor|null $Actor
 * @property string|null $SourceIp
 * @property Enrichment|null $Enrichment
 * @property ActivityWindow|null $ActivityWindow
 */
class S3Activity extends Shape
{
    /**
     * @param array{
     *     Api?: string|null,
     *     AffectedBucket?: string|null,
     *     OtherS3Activity?: string|null,
     *     NonS3Activity?: string|null,
     *     SessionAssessment?: string|null,
     *     EventCount?: int<0, max>|null,
     *     Actor?: InvestigationActor|null,
     *     SourceIp?: string|null,
     *     Enrichment?: Enrichment|null,
     *     ActivityWindow?: ActivityWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
