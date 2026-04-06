<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIpRestriction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property array<string, string>|null $IpRestrictionRuleMap
 * @property array<string, string>|null $VpcIdRestrictionRuleMap
 * @property array<string, string>|null $VpcEndpointIdRestrictionRuleMap
 * @property bool|null $Enabled
 */
class UpdateIpRestrictionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     IpRestrictionRuleMap?: array<string, string>|null,
     *     VpcIdRestrictionRuleMap?: array<string, string>|null,
     *     VpcEndpointIdRestrictionRuleMap?: array<string, string>|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
