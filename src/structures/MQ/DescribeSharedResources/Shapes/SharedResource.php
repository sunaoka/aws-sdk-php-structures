<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeSharedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $DnsNames
 * @property SharedResourceError|null $Error
 * @property string $ResourceArn
 * @property list<string>|null $ResourceShareArns
 * @property 'AVAILABLE'|'SETUP_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'PENDING_CREATE'|'PENDING_DELETE'|'ERROR' $Status
 * @property 'RESOURCE_SHARE'|'RESOURCE' $Type
 */
class SharedResource extends Shape
{
    /**
     * @param array{
     *     DnsNames?: list<string>|null,
     *     Error?: SharedResourceError|null,
     *     ResourceArn: string,
     *     ResourceShareArns?: list<string>|null,
     *     Status: 'AVAILABLE'|'SETUP_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'PENDING_CREATE'|'PENDING_DELETE'|'ERROR',
     *     Type: 'RESOURCE_SHARE'|'RESOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
