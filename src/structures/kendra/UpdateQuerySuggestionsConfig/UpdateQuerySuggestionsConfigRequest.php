<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property 'ENABLED'|'LEARN_ONLY' $Mode
 * @property int $QueryLogLookBackWindowInDays
 * @property bool $IncludeQueriesWithoutUserInformation
 * @property int $MinimumNumberOfQueryingUsers
 * @property int $MinimumQueryCount
 * @property Shapes\AttributeSuggestionsUpdateConfig $AttributeSuggestionsConfig
 */
class UpdateQuerySuggestionsConfigRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Mode?: 'ENABLED'|'LEARN_ONLY',
     *     QueryLogLookBackWindowInDays?: int,
     *     IncludeQueriesWithoutUserInformation?: bool,
     *     MinimumNumberOfQueryingUsers?: int,
     *     MinimumQueryCount?: int,
     *     AttributeSuggestionsConfig?: Shapes\AttributeSuggestionsUpdateConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
