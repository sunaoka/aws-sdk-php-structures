<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListLanguageModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP'|null $LanguageCode
 * @property 'NarrowBand'|'WideBand'|null $BaseModelName
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $ModelStatus
 * @property bool|null $UpgradeAvailability
 * @property string|null $FailureReason
 * @property InputDataConfig|null $InputDataConfig
 */
class LanguageModel extends Shape
{
    /**
     * @param array{
     *     ModelName?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     LanguageCode?: 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP'|null,
     *     BaseModelName?: 'NarrowBand'|'WideBand'|null,
     *     ModelStatus?: 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     UpgradeAvailability?: bool|null,
     *     FailureReason?: string|null,
     *     InputDataConfig?: InputDataConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
