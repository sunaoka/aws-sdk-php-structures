<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateQuerySuggestionsConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property 'ENABLED'|'LEARN_ONLY'|null $Mode
 * @property int|null $QueryLogLookBackWindowInDays
 * @property bool|null $IncludeQueriesWithoutUserInformation
 * @property int<1, 10000>|null $MinimumNumberOfQueryingUsers
 * @property int<1, 10000>|null $MinimumQueryCount
 * @property Shapes\AttributeSuggestionsUpdateConfig|null $AttributeSuggestionsConfig
 */
class UpdateQuerySuggestionsConfigRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Mode?: 'ENABLED'|'LEARN_ONLY'|null,
     *     QueryLogLookBackWindowInDays?: int|null,
     *     IncludeQueriesWithoutUserInformation?: bool|null,
     *     MinimumNumberOfQueryingUsers?: int<1, 10000>|null,
     *     MinimumQueryCount?: int<1, 10000>|null,
     *     AttributeSuggestionsConfig?: Shapes\AttributeSuggestionsUpdateConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
