<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property 'ENABLED'|'LEARN_ONLY' $Mode
 * @property int $QueryLogLookBackWindowInDays
 * @property bool $IncludeQueriesWithoutUserInformation
 * @property int<1, 10000> $MinimumNumberOfQueryingUsers
 * @property int<1, 10000> $MinimumQueryCount
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
     *     MinimumNumberOfQueryingUsers?: int<1, 10000>,
     *     MinimumQueryCount?: int<1, 10000>,
     *     AttributeSuggestionsConfig?: Shapes\AttributeSuggestionsUpdateConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
