<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'LAKEFORMATION'|'S3'>|null $accessTypes
 * @property list<Shapes\LogSourceResource> $sources
 * @property string|null $subscriberDescription
 * @property Shapes\AwsIdentity $subscriberIdentity
 * @property string $subscriberName
 * @property list<Shapes\Tag>|null $tags
 */
class CreateSubscriberRequest extends Request
{
    /**
     * @param array{
     *     accessTypes?: list<'LAKEFORMATION'|'S3'>|null,
     *     sources: list<Shapes\LogSourceResource>,
     *     subscriberDescription?: string|null,
     *     subscriberIdentity: Shapes\AwsIdentity,
     *     subscriberName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
