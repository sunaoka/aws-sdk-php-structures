<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateConnectionsBillingMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $connectionIds
 * @property 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5' $billingMode
 */
class UpdateConnectionsBillingModeRequest extends Request
{
    /**
     * @param array{
     *     connectionIds: list<string>,
     *     billingMode: 'PayAsYouGo'|'FlatRateTier1'|'FlatRateTier2'|'FlatRateTier3'|'FlatRateTier4'|'FlatRateTier5'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
