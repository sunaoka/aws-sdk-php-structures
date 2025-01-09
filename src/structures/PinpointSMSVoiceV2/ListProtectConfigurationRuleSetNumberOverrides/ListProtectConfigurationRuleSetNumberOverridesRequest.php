<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListProtectConfigurationRuleSetNumberOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property list<Shapes\ProtectConfigurationRuleSetNumberOverrideFilterItem> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListProtectConfigurationRuleSetNumberOverridesRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     Filters?: list<Shapes\ProtectConfigurationRuleSetNumberOverrideFilterItem>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
