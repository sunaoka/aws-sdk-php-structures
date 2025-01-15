<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LogSourceResource>|null $sources
 * @property string|null $subscriberDescription
 * @property string $subscriberId
 * @property Shapes\AwsIdentity|null $subscriberIdentity
 * @property string|null $subscriberName
 */
class UpdateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     sources?: list<Shapes\LogSourceResource>|null,
     *     subscriberDescription?: string|null,
     *     subscriberId: string,
     *     subscriberIdentity?: Shapes\AwsIdentity|null,
     *     subscriberName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
