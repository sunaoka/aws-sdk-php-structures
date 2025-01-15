<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $localeId
 * @property string|null $localeName
 * @property string|null $description
 * @property 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null $botLocaleStatus
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult|null $lastBuildSubmittedDateTime
 */
class BotLocaleSummary extends Shape
{
    /**
     * @param array{
     *     localeId?: string|null,
     *     localeName?: string|null,
     *     description?: string|null,
     *     botLocaleStatus?: 'Creating'|'Building'|'Built'|'ReadyExpressTesting'|'Failed'|'Deleting'|'NotBuilt'|'Importing'|'Processing'|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastBuildSubmittedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
