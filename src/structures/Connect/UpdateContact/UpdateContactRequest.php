<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string|null $Name
 * @property string|null $Description
 * @property array<string, Shapes\Reference>|null $References
 * @property array<string, Shapes\SegmentAttributeValue>|null $SegmentAttributes
 * @property Shapes\QueueInfoInput|null $QueueInfo
 * @property Shapes\UserInfo|null $UserInfo
 * @property Shapes\Endpoint|null $CustomerEndpoint
 * @property Shapes\Endpoint|null $SystemEndpoint
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     References?: array<string, Shapes\Reference>|null,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>|null,
     *     QueueInfo?: Shapes\QueueInfoInput|null,
     *     UserInfo?: Shapes\UserInfo|null,
     *     CustomerEndpoint?: Shapes\Endpoint|null,
     *     SystemEndpoint?: Shapes\Endpoint|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
