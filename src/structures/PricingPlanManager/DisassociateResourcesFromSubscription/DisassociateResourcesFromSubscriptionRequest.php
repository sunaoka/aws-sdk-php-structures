<?php

namespace Sunaoka\Aws\Structures\PricingPlanManager\DisassociateResourcesFromSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property list<string> $resourceArns
 * @property string $ifMatch
 * @property string|null $clientToken
 */
class DisassociateResourcesFromSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     resourceArns: list<string>,
     *     ifMatch: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
