<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property string $Name
 * @property string $Description
 * @property array<string, Shapes\Reference> $References
 * @property array<string, Shapes\SegmentAttributeValue> $SegmentAttributes
 * @property Shapes\QueueInfoInput $QueueInfo
 * @property Shapes\UserInfo $UserInfo
 * @property Shapes\Endpoint $CustomerEndpoint
 * @property Shapes\Endpoint $SystemEndpoint
 */
class UpdateContactRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     Name?: string,
     *     Description?: string,
     *     References?: array<string, Shapes\Reference>,
     *     SegmentAttributes?: array<string, Shapes\SegmentAttributeValue>,
     *     QueueInfo?: Shapes\QueueInfoInput,
     *     UserInfo?: Shapes\UserInfo,
     *     CustomerEndpoint?: Shapes\Endpoint,
     *     SystemEndpoint?: Shapes\Endpoint
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
