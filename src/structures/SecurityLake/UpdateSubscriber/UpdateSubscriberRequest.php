<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LogSourceResource> $sources
 * @property string $subscriberDescription
 * @property string $subscriberId
 * @property Shapes\AwsIdentity $subscriberIdentity
 * @property string $subscriberName
 */
class UpdateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     sources?: list<Shapes\LogSourceResource>,
     *     subscriberDescription?: string,
     *     subscriberId: string,
     *     subscriberIdentity?: Shapes\AwsIdentity,
     *     subscriberName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
