<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListProtectConfigurationRuleSetNumberOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectConfigurationId
 * @property list<Shapes\ProtectConfigurationRuleSetNumberOverrideFilterItem>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListProtectConfigurationRuleSetNumberOverridesRequest extends Request
{
    /**
     * @param array{
     *     ProtectConfigurationId: string,
     *     Filters?: list<Shapes\ProtectConfigurationRuleSetNumberOverrideFilterItem>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
