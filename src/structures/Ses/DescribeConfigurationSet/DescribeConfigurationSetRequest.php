<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeConfigurationSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property list<'eventDestinations'|'trackingOptions'|'deliveryOptions'|'reputationOptions'>|null $ConfigurationSetAttributeNames
 */
class DescribeConfigurationSetRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     ConfigurationSetAttributeNames?: list<'eventDestinations'|'trackingOptions'|'deliveryOptions'|'reputationOptions'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
