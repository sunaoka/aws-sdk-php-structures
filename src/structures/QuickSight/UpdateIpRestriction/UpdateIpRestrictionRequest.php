<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateIpRestriction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property array<string, string> $IpRestrictionRuleMap
 * @property array<string, string> $VpcIdRestrictionRuleMap
 * @property array<string, string> $VpcEndpointIdRestrictionRuleMap
 * @property bool $Enabled
 */
class UpdateIpRestrictionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     IpRestrictionRuleMap?: array<string, string>,
     *     VpcIdRestrictionRuleMap?: array<string, string>,
     *     VpcEndpointIdRestrictionRuleMap?: array<string, string>,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
