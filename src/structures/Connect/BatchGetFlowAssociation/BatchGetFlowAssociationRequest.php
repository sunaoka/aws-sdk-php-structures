<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetFlowAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<string> $ResourceIds
 * @property 'VOICE_PHONE_NUMBER'|null $ResourceType
 */
class BatchGetFlowAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ResourceIds: list<string>,
     *     ResourceType?: 'VOICE_PHONE_NUMBER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
