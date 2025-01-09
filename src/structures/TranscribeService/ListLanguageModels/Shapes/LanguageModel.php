<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListLanguageModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP' $LanguageCode
 * @property 'NarrowBand'|'WideBand' $BaseModelName
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED' $ModelStatus
 * @property bool $UpgradeAvailability
 * @property string $FailureReason
 * @property InputDataConfig $InputDataConfig
 */
class LanguageModel extends Shape
{
    /**
     * @param array{
     *     ModelName?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     LanguageCode?: 'en-US'|'hi-IN'|'es-US'|'en-GB'|'en-AU'|'de-DE'|'ja-JP',
     *     BaseModelName?: 'NarrowBand'|'WideBand',
     *     ModelStatus?: 'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     UpgradeAvailability?: bool,
     *     FailureReason?: string,
     *     InputDataConfig?: InputDataConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
