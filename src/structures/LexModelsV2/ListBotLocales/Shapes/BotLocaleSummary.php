<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $localeId
 * @property string $localeName
 * @property string $description
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing' $botLocaleStatus
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult $lastBuildSubmittedDateTime
 */
class BotLocaleSummary extends Shape
{
    /**
     * @param array{
     *     localeId?: string,
     *     localeName?: string,
     *     description?: string,
     *     botLocaleStatus?: 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing',
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     lastBuildSubmittedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
