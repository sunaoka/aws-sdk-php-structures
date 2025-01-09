<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateParticipantToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stageArn
 * @property int $duration
 * @property string $userId
 * @property array<string, string> $attributes
 * @property list<'PUBLISH'|'SUBSCRIBE'> $capabilities
 */
class CreateParticipantTokenRequest extends Request
{
    /**
     * @param array{
     *     stageArn: string,
     *     duration?: int,
     *     userId?: string,
     *     attributes?: array<string, string>,
     *     capabilities?: list<'PUBLISH'|'SUBSCRIBE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
