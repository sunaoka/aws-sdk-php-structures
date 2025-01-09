<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'LAKEFORMATION'|'S3'> $accessTypes
 * @property list<Shapes\LogSourceResource> $sources
 * @property string $subscriberDescription
 * @property Shapes\AwsIdentity $subscriberIdentity
 * @property string $subscriberName
 * @property list<Shapes\Tag> $tags
 */
class CreateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     accessTypes?: list<'LAKEFORMATION'|'S3'>,
     *     sources: list<Shapes\LogSourceResource>,
     *     subscriberDescription?: string,
     *     subscriberIdentity: Shapes\AwsIdentity,
     *     subscriberName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
